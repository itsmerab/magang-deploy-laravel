<script src="//unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>

<script>
    // buat fungsi cek menu
    const cekMenu = () => {
        for (link of document.querySelectorAll ('#sidebar .sidebar-link').values()) {
           // cek apakah hanya #
            if (link.getAttribute('href') == '#')
              continue;

           // cek apakah domain tujuan sama
            if (link.host !== location.host)
              continue;
           
           // apakah hanya /
            if (link.pathname === '/' && link.pathname !== location.pathname)
              continue;

           // cek apakah url sekarang bagian dari link pada menu
            if (!location.pathname.startsWith(link.pathname))
              continue;
        
           // tambahan class active ke element li
           link.parentElement.classList.add('active');

        }
    }

    // jalankan fungsi cek menu
    cekMenu(); 
</script>