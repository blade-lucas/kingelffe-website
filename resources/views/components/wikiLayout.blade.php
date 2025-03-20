<x-baseLayout>
    <div class="h-[80%]">
        <div class="flex justify-center items-center bg-slate-400 h-[35%] gap-4">
            <a href="#" class="previous roundButton" style="text-decoration: none; display: inline-block; padding: 8px 16px;">&#8249;</a>
            <div id="wikiCategoryCardsContainer"></div>
            <a href="#" class="next roundButton" style="text-decoration: none; display: inline-block; padding: 8px 16px;">&#8250;</a>
        </div>

        <hr class="solid">

        <div class="flex justify-center p-2 text-white space-x-12">
            <a id="serverInfo" class="tab-link">
                <h1 class="font-semi-bold text-md hover:font-black">Server Info</h1>
            </a>
            <a id="plugins" class="tab-link">
                <h1 class="font-semi-bold text-md hover:font-black">Plugins</h1>
            </a>
            <a id="commands" class="tab-link">
                <h1 class="font-semi-bold text-md hover:font-black">Commands</h1>
            </a>
            <a id="tutorials" class="tab-link">
                <h1 class="font-semi-bold text-md hover:font-black">Tutorials</h1>
            </a>
        </div>

        <hr class="solid mb-3">
        <div id="wikiInfo">

        </div>
    </div>

</x-baseLayout>

<script>
    let allCategories = [];  // All categories fetched from the server
    let currentIndex = 0;    // The current set of 5 categories being displayed

    document.addEventListener('DOMContentLoaded', function () {
        // Check the current URL hash and activate the corresponding tab
        let activeTab = window.location.hash || '#serverInfo'; // Default to 'serverInfo' if no hash

        // Activate the tab
        document.querySelector(activeTab)?.classList.add('font-bold');

        // Add event listeners to all the tabs
        const tabs = document.querySelectorAll('.tab-link');
        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                // Update the URL hash without reloading the page
                window.location.hash = this.id;

                // Remove the font-bold class from all tabs
                tabs.forEach(t => t.classList.remove('font-bold'));

                // Add font-bold to the clicked tab
                this.classList.add('font-bold');

                // Trigger the page update (show wiki entries of the selected tab)
                updateWikiEntries(this.id);
            });
        });

        // Trigger the initial display update based on the URL hash
        updateWikiEntries(window.location.hash.slice(1) || 'serverInfo');
    });

    function updateWikiEntries(selectedTab) {
        // Show a loading message while fetching data
        const container = document.getElementById('wikiCategoryCardsContainer');
        container.innerHTML = '<p>Loading...</p>'; // Show loading text

        // Fetch the wiki entries based on the selected tab using an AJAX request
        fetch(`/get-wiki-entries/${selectedTab}`)
            .then(response => response.json())
            .then(data => {
                allCategories = data; // Store all categories in allCategories array
                container.innerHTML = ''; // Clear the container
                container.classList.add('flex', 'flex-wrap', 'gap-4'); // Add flexbox classes

                // Render the first set of categories (5 per set)
                renderCategories();
                toggleNavigationButtons();
            })
            .catch(error => {
                console.error('Error fetching wiki entries:', error);
                container.innerHTML = '<p>Error loading wiki entries.</p>';
            });
    }

    // Function to render the current set of categories
    function renderCategories() {
        const container = document.getElementById('wikiCategoryCardsContainer');
        container.innerHTML = '';  // Clear the container for new data

        // Calculate which 5 categories to show based on currentIndex
        const start = currentIndex * 5;
        const end = start + 5;
        const categoriesToDisplay = allCategories.slice(start, end);

        // Create and display the cards for the current set of categories
        categoriesToDisplay.forEach(item => {
            const card = document.createElement('div');
            card.classList.add('wikiCategoryCard', 'w-64', 'm-4'); // Card width and spacing

            // Create HTML content for each wiki entry card
            card.innerHTML = `
                <a href="${item.wiki_route}" class="hover:transition duration-300 hover:scale-105">
                    <div class="h-32 w-full bg-slate-400 border-black border-2 rounded flex items-center justify-center p-12">
                            <h1 class="text-white text-2xl text-center font-semibold" style="text-shadow: black 1px 0 10px;">
                                ${item.wiki_name}
                            </h1>

                    </div>
                </a>
            `;

            // Append the card to the container
            container.appendChild(card);
        });
    }

    function toggleNavigationButtons() {
        const previousButton = document.querySelector('.previous');
        const nextButton = document.querySelector('.next');

        // If there are 5 or fewer cards, hide the navigation buttons
        if (allCategories.length <= 5) {
            previousButton.style.display = 'none';
            nextButton.style.display = 'none';
        } else {
            previousButton.style.display = 'inline-block';
            nextButton.style.display = 'inline-block';
        }
    }

    // Add event listeners to the "Previous" and "Next" buttons
    const previousButton = document.querySelector('.previous');
    const nextButton = document.querySelector('.next');

    previousButton.addEventListener('click', function() {
        // Move to the previous set of 5 categories, wrapping around if needed
        currentIndex = (currentIndex - 1 + Math.ceil(allCategories.length / 5)) % Math.ceil(allCategories.length / 5);
        renderCategories();
    });

    nextButton.addEventListener('click', function() {
        // Move to the next set of 5 categories, wrapping around if needed
        currentIndex = (currentIndex + 1) % Math.ceil(allCategories.length / 5);
        renderCategories();
    });
</script>
