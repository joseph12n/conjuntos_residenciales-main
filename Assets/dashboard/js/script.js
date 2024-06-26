        const toggleSidebarBtn = document.getElementById('toggleSidebarBtn');
        const sidebar = document.querySelector('.sidebar');
        const main = document.querySelector('.main');

        toggleSidebarBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            main.classList.toggle('expanded');
            toggleSidebarBtn.classList.toggle('hidden');
            toggleSidebarBtn.textContent = sidebar.classList.contains('hidden') ? 'Mostrar' : 'Ocultar';
        });

        const sectionTitles = document.querySelectorAll('.sidebar-section-title');

        sectionTitles.forEach(title => {
            title.addEventListener('click', () => {
                const content = title.nextElementSibling;
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            });
        });
toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('open');
});
