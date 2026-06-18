<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Cache;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.pages.manage-settings';

    protected static ?string $navigationGroup = 'System Settings';

    protected static ?string $title = 'Konfigurasi Sistem & AI';

    public ?array $data = [];

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('testConnection')
                ->label('Test API Connection')
                ->icon('heroicon-o-signal')
                ->color('success')
                ->action(function () {
                    $settings = Setting::pluck('value', 'key')->toArray();
                    $provider = $settings['ai_provider'] ?? 'gemini';
                    $apiKey = $settings['ai_api_key'] ?? '';
                    $model = $settings['ai_model'] ?? '';
                    $baseUrl = $settings['ai_base_url'] ?? '';

                    if (empty($apiKey)) {
                        Notification::make()->title('API Key kosong!')->warning()->send();
                        return;
                    }

                    try {
                        if (in_array($provider, ['adacode', 'openai', 'custom'])) {
                            $endpoint = rtrim($baseUrl ?: 'https://api.openai.com/v1', '/') . '/chat/completions';
                            $response = \Illuminate\Support\Facades\Http::withToken($apiKey)->timeout(15)->post($endpoint, [
                                'model' => $model ?: 'gpt-3.5-turbo',
                                'messages' => [
                                    ['role' => 'user', 'content' => 'Test connection. Say "OK!" if you read this.']
                                ]
                            ]);

                            if ($response->successful()) {
                                Notification::make()->title('Koneksi Sukses! (Adacode/OpenAI)')->success()->send();
                            } else {
                                Notification::make()->title('Gagal: ' . $response->status())->body($response->body())->danger()->send();
                            }
                        } elseif ($provider === 'gemini') {
                            $modelName = $model ?: 'gemini-2.5-flash';
                            $endpoint = "https://generativelanguage.googleapis.com/v1beta/models/{$modelName}:generateContent?key={$apiKey}";
                            $response = \Illuminate\Support\Facades\Http::timeout(15)->post($endpoint, [
                                'contents' => [['parts' => [['text' => 'Test connection. Say "OK!" if you read this.']]]]
                            ]);

                            if ($response->successful()) {
                                Notification::make()->title('Koneksi Sukses! (Gemini)')->success()->send();
                            } else {
                                Notification::make()->title('Gagal: ' . $response->status())->body($response->body())->danger()->send();
                            }
                        }
                    } catch (\Exception $e) {
                        Notification::make()->title('Error Jaringan:')->body($e->getMessage())->danger()->send();
                    }
                })
        ];
    }

    public function mount(): void
    {
        $settings = Setting::pluck('value', 'key')->toArray();

        $this->form->fill([
            'ai_provider' => $settings['ai_provider'] ?? 'gemini',
            'ai_base_url' => $settings['ai_base_url'] ?? '',
            'ai_api_key' => $settings['ai_api_key'] ?? '',
            'ai_model' => $settings['ai_model'] ?? 'gemini-2.5-flash',
            'quick_access' => isset($settings['quick_access']) ? json_decode($settings['quick_access'], true) : [],
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Konfigurasi API AI (Generasi Berita Positif)')
                    ->description('Pengaturan untuk menarik data positif Kanwil Ditjenpas Banten secara otomatis.')
                    ->schema([
                        \Filament\Forms\Components\Select::make('ai_provider')
                            ->label('Penyedia AI')
                            ->options([
                                'gemini' => 'Google Gemini (Default)',
                                'openai' => 'OpenAI (ChatGPT)',
                                'adacode' => 'Adacode.ai',
                                'custom' => 'Custom Provider'
                            ])
                            ->default('gemini')
                            ->live(),
                        TextInput::make('ai_base_url')
                            ->label('API Base URL')
                            ->placeholder('Contoh: https://api.adacode.ai/v1')
                            ->helperText('Diperlukan jika menggunakan Adacode.ai atau Custom Provider (contoh: endpoint OpenAI compatible).')
                            ->visible(fn (\Filament\Forms\Get $get) => in_array($get('ai_provider'), ['adacode', 'custom', 'openai'])),
                        TextInput::make('ai_api_key')
                            ->label('API Key')
                            ->password()
                            ->revealable()
                            ->placeholder('Masukkan API Key dari penyedia AI...'),
                        TextInput::make('ai_model')
                            ->label('Model AI')
                            ->placeholder('Misal: gemini-2.5-flash / gpt-4o / llama-3')
                            ->helperText('Nama model spesifik yang akan digunakan.'),
                    ]),

                Section::make('Pengaturan Quick Access Beranda')
                    ->description('Kelola tautan cepat (Quick Access) yang tampil di beranda utama.')
                    ->schema([
                        \Filament\Forms\Components\Repeater::make('quick_access')
                            ->label('Daftar Tautan Akses Cepat')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Nama Tautan')
                                    ->required()
                                    ->maxLength(100),
                                TextInput::make('url')
                                    ->label('URL Tautan')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('icon')
                                    ->label('Icon (FontAwesome Class)')
                                    ->placeholder('Contoh: fa-solid fa-link')
                                    ->maxLength(100),
                                \Filament\Forms\Components\Select::make('category')
                                    ->label('Kategori')
                                    ->options([
                                        'profil' => 'Profil Kanwil',
                                        'layanan' => 'Layanan Publik',
                                        'informasi' => 'Informasi Publik',
                                        'data' => 'Dashboard Data',
                                        'berita' => 'Berita & Kabar',
                                        'internal' => 'Aplikasi Internal',
                                        'kontak' => 'Kontak & Aduan',
                                        'tautan' => 'Tautan Penting',
                                    ])
                                    ->required(),
                            ])
                            ->default([])
                            ->columns(2)
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                            ->columnSpanFull(),
                    ])
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $state = $this->form->getState();

        foreach ($state as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => is_array($value) ? json_encode($value) : $value]
            );
        }

        Notification::make()
            ->title('Pengaturan Berhasil Disimpan')
            ->success()
            ->send();
    }
}
