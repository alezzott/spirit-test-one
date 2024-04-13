document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.star');
    const averageRatingElement = document.getElementById('average-rating');
    const ratingKey = 'productRating';

    function initializeRatings() {
        if (!localStorage.getItem(ratingKey)) {
            localStorage.setItem(ratingKey, JSON.stringify([]));
        }
    }

    function getRatings() {
        return JSON.parse(localStorage.getItem(ratingKey)) || [];
    }

    function saveRating(rating) {
        const ratings = getRatings();
        ratings.push(rating);
        localStorage.setItem(ratingKey, JSON.stringify(ratings));
    }

    function calculateAverageRating() {
        const ratings = getRatings();
        if (ratings.length === 0) {
            return 0;
        }
        const totalRating = ratings.reduce((acc, curr) => acc + curr, 0);
        return totalRating / ratings.length;
    }

    function updateAverageRating() {
        const averageRating = calculateAverageRating();
        averageRatingElement.textContent = `Avaliação média: ${averageRating.toFixed(1)}`;
    }

    function updateStars(rating) {
        stars.forEach(star => {
            const starValue = parseInt(star.dataset.value);
            star.querySelector('i').classList.toggle('ph-fill', starValue <= rating);
        });
    }

    stars.forEach(star => {
        star.addEventListener('click', () => {
            const rating = parseInt(star.dataset.value);
            if (!isNaN(rating) && rating >= 1 && rating <= 5) {
                console.log(`Avaliação selecionada: ${rating}`);
                saveRating(rating);
                updateAverageRating();
                updateStars(rating);
            } else {
                console.error('Avaliação inválida. Deve ser um número inteiro entre 1 e 5.');
            }
        });
    });

    initializeRatings();
    updateAverageRating();
});
