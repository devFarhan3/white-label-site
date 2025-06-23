<!-- header here -->
<?php include 'header.php'; ?>

<div id="new_raffle_home">
    <!-- raffle_house_home  Section -->
    <section id="raffle_house_home" class="raffle_house_home section">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-column justify-content-center align-items-center text-center">
                    <div class="raffle_text_sec">
                        <h1 data-aos="fade-up">Welcome to Raffle House Rewards!</h1>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- raffle_house_home Section -->


    <section id="raffle_gift_cards" class="raffle_gift_cards section">
        <div class="container">
            <h2 class="section-title">To start with, select the supermarket you normally shop with...</h2>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-4 justify-content-center" id="card-container">
                <!-- Cards will be injected here by JavaScript -->
            </div>

            <button class="btn none-of-these-btn">None of these</button>
        </div>
    </section>
</div>



<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cardsData = [

            {
                id: 'airbnb',
                logo: {
                    type: 'image',
                    content: 'assets/img/gf1.png',
                    colorClass: 'pink'
                },
                spent: '$10',
                freeEntry: '10 FREE Entry'
            },


            {
                id: 'ask-italian',
                logo: {
                    type: 'image',
                    content: 'assets/img/b2.png',
                    colorClass: 'green'
                },
                spent: '$10',
                freeEntry: '10 FREE Entry'
            },

            {
                id: 'ask-italian',
                logo: {
                    type: 'image',
                    content: 'assets/img/b3.png',
                    colorClass: 'green'
                },
                spent: '$10',
                freeEntry: '10 FREE Entry'
            },

            {
                id: 'ask-italian',
                logo: {
                    type: 'image', // Changed to image
                    content: 'assets/img/addidas.png',
                    colorClass: 'green'
                },
                spent: '$10',
                freeEntry: '10 FREE Entry'
            },

            {
                id: 'ask-italian',
                logo: {
                    type: 'image', // Changed to image
                    content: 'assets/img/nike.png',
                    colorClass: 'green'
                },
                spent: '$10',
                freeEntry: '10 FREE Entry'
            },

            {
                id: 'ask-italian',
                logo: {
                    type: 'image', // Changed to image
                    content: 'assets/img/nike.png',
                    colorClass: 'green'
                },
                spent: '$10',
                freeEntry: '10 FREE Entry'
            },

            {
                id: 'ask-italian',
                logo: {
                    type: 'image', // Changed to image
                    content: 'assets/img/curys.png',
                    colorClass: 'green'
                },
                spent: '$20',
                freeEntry: '30 FREE Entry'
            },


        ];

        const cardContainer = document.getElementById('card-container');

        cardsData.forEach(card => {
            const colDiv = document.createElement('div');
            colDiv.className = 'col'; // Bootstrap column class

            const cardDiv = document.createElement('div');
            cardDiv.className = 'card bg-transparent card-custom ms-3 me-3 mb-3';

            const cardImgContainer = document.createElement('div');
            cardImgContainer.className = `card-img-container ${card.logo.colorClass}`;

            if (card.logo.type === 'image') {
                const img = document.createElement('img');
                img.src = card.logo.content;
                img.alt = `${card.id} logo`;
                img.onerror = function() {
                    this.src = 'https://placehold.co/100x50/cccccc/333333?text=Logo';
                }; // Placeholder on error
                cardImgContainer.appendChild(img);
            } else if (card.logo.type === 'text') {
                const logoText = document.createElement('div');
                logoText.style.cssText = 'text-align: center; font-size: 1.8rem; font-weight: 700; line-height: 1.2;';
                logoText.innerHTML = card.logo.content;
                if (card.logo.subContent) {
                    const subText = document.createElement('div');
                    subText.style.cssText = 'font-size: 0.8rem; font-weight: 500; opacity: 0.8; margin-top: 5px;';
                    subText.textContent = card.logo.subContent;
                    logoText.appendChild(subText);
                }
                cardImgContainer.appendChild(logoText);
            }
            // The 'svg' case is now removed based on your request.

            const cardBody = document.createElement('div');
            cardBody.className = 'card-body-custom';
            cardBody.innerHTML = `Spent <strong>${card.spent}</strong><br>Get <strong>${card.freeEntry}</strong>`;

            cardDiv.appendChild(cardImgContainer);
            cardDiv.appendChild(cardBody);
            colDiv.appendChild(cardDiv);
            cardContainer.appendChild(colDiv);
        });
    });
</script>

<!-- footer sec -->
<?php include 'footer.php'; ?>