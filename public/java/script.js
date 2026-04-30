 // Toggle Hamburger Menu Mobile
        const mobileToggleBtn = document.getElementById('mobile-toggle');
        const mobilePanel = document.getElementById('mobile-panel');
        const iconBars = document.getElementById('icon-bars');
        const iconClose = document.getElementById('icon-close');
        const detailbutton = document.getElementById('detail');
        const detailhome =document.getElementById('detail-home');
        const detailinfo =document.getElementById('grid-home');

        mobileToggleBtn.addEventListener('click', function() {
            mobilePanel.classList.toggle('active');
            
            // Ubah Ikon antara Hamburger dan Silang (X)
            if (mobilePanel.classList.contains('active')) {
                iconBars.style.display = 'none';
                iconClose.style.display = 'block';
            } 
            else {
                iconBars.style.display = 'block';
                iconClose.style.display = 'none';
            }
        });

        detailbutton.addEventListener('click', function() {
            detailhome.classList.toggle('active');
            
            // Ubah Ikon antara Hamburger dan Silang (X)
            if (detailhome.classList.contains('active')) {
                detailhome.style.display = 'block';
            } else {

                detailhome.style.display = 'none';
            }
        });


        // Fungsi Generik untuk Dropdown di Mobile
        function setupMobileDropdown(btnId, contentId, iconId) {
            const btn = document.getElementById(btnId);
            const content = document.getElementById(contentId);
            const icon = document.getElementById(iconId);

            btn.addEventListener('click', function() {
                content.classList.toggle('active');
                
                // Putar Ikon Panah
                if (content.classList.contains('active')) {
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        }

        // Jalankan untuk menu "Tentang" dan "Layanan"
        setupMobileDropdown('mobile-btn-tentang', 'mobile-content-tentang', 'mobile-icon-tentang');
        setupMobileDropdown('mobile-btn-layanan', 'mobile-content-layanan', 'mobile-icon-layanan');