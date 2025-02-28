document.addEventListener('DOMContentLoaded', () => {
    const openModalBtn = document.getElementById('openModal');
    const modalOverlay = document.querySelector('.modal-overlay');
    const stars = document.querySelectorAll('.star');
    let currentRating = 0;

    // Modal handling
    openModalBtn.addEventListener('click', () => {
        modalOverlay.style.display = 'flex';
    });

    modalOverlay.addEventListener('click', (e) => {
        if (e.target === modalOverlay) {
            modalOverlay.style.display = 'none';
        }
    });

    // Star rating
    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            currentRating = index + 1;
            stars.forEach((s, i) => {
                s.classList.toggle('active', i <= index);
            });
        });
    });

    // Form submission
    document.getElementById('feedbackForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = {
            name: document.getElementById('name').value,
            company: document.getElementById('company').value,
            email: document.getElementById('email').value,
            message: document.getElementById('message').value,
            rating: currentRating
        };

        // Bad word check
        const badWords = [
            "merda", "porra", "caralho", "foda-se", "puta", "desgraça", "cu", "arrombado", "imbecil",
            "burro", "otário", "babaca", "trouxa", "idiota", "corno", "p0rra", "c@ralho", "f*d@-s3",
            "p#ta", "d3sgraç@", "i****a", "preto imundo", "macaco", "favelado", "chinoca", "árabe sujo",
            "cigano ladrão", "judeu nojento", "viado", "bicha", "traveco", "sapatão", "aberração",
            "doente", "mulher burra", "vagabunda", "vadia", "puta barata", "cozinha e cala a boca",
            "matar", "assassinar", "torturar", "esfaquear", "explodir", "enforcar", "mutilar",
            "tráfico", "drogas", "sequestro", "estuprar", "pedofilia", "golpe", "fraude", "crime",
            "contrabando", "corrupção", "bomba", "pistola", "AK-47", "ataque", "jihad", "tiroteio",
            "ganhe dinheiro fácil", "esquema pirâmide", "oportunidade imperdível", "investimento garantido",
            "clique aqui", "bit.ly", "tinyurl", "oferta exclusiva", "dinheiro grátis", "pagamos para você clicar",
            "compre já", "promoção imperdível", "oferta única", "estoque limitado", "sexo", "pornô", "nudes",
            "peitos", "bunda", "pau", "vagina", "anal", "oral", "gangbang", "suruba", "acompanhante",
            "garota de programa", "michê", "programa barato", "me chama no zap", "vídeos quentes",
            "conteúdo +18", "ao vivo sem censura", "comunista safado", "fascista", "bolsominion",
            "esquerdopata", "direita lixo", "governo corrupto", "golpe de estado", "blasfêmia", "herege",
            "queimar no inferno", "fanático religioso", "seita maldita", "falso profeta"
        ]; // Adicione mais palavras
        
        const hasBadWord = badWords.some(word => 
            formData.message.toLowerCase().includes(word.toLowerCase())
        );

        if (hasBadWord) {
            alert('Mensagem contém conteúdo inadequado!');
            return;
        }

        try {
            const response = await fetch('api/submit_testimonial.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            });

            if (response.ok) {
                alert('Obrigado pelo seu feedback!');
                modalOverlay.style.display = 'none';
                location.reload();
            }
        } catch (error) {
            console.error('Error:', error);
        }
    });

    // Load testimonials
    loadTestimonials();

    async function loadTestimonials(page = 1) {
        try {
            const response = await fetch(`api/get_testimonials.php?page=${page}`);
            const { testimonials, totalPages } = await response.json();
            
            const grid = document.querySelector('.testimonials-grid');
            grid.innerHTML = testimonials.map(testimonial => `
                <div class="testimonial-card">
                    <h3>${testimonial.name}${testimonial.company ? ` (${testimonial.company})` : ''}</h3>
                    <div class="rating">${'★'.repeat(testimonial.rating)}</div>
                    <p>${testimonial.message}</p>
                    <small>${new Date(testimonial.created_at).toLocaleDateString()}</small>
                </div>
            `).join('');

            // Update pagination
            const pagination = document.querySelector('.pagination');
            pagination.innerHTML = '';
            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement('button');
                btn.className = `btn ${i === page ? 'active' : ''}`;
                btn.textContent = i;
                btn.addEventListener('click', () => loadTestimonials(i));
                pagination.appendChild(btn);
            }
        } catch (error) {
            console.error('Error loading testimonials:', error);
        }
    }
});