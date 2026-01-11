// category filter
const buttons = document.querySelectorAll('.category-btn');
const images = document.querySelectorAll('.gallery-item');

buttons.forEach(btn => {
    btn.addEventListener('click', () => {
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const category = btn.dataset.category;

        images.forEach(img => {
            if (category === 'all') {
                img.style.display = 'block';
            } else {
                img.style.display = img.classList.contains(category) ? 'block' : 'none';
            }
        });
    });
});