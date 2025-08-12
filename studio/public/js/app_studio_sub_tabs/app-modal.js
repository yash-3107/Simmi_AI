// --- Function to make the newly loaded form interactive ---
// This function sets up all the event listeners for the modal's content.
function setupInteractiveModal() {
    const parentContainer = $("#app-studio-parent-main");
    
    // --- Logic for App Template Dropdown ---
    // Use a wrapper ID to handle clicks on the input or the arrow.
    parentContainer.on('click', '#my-apps-create-app-template-autocomplete-wrapper', function() {
        const container = $(this);
        
        // If dropdown already exists, remove it and do nothing else.
        if (container.find('.autocomplete-dropdown').length > 0) {
            container.find('.autocomplete-dropdown').remove();
            return;
        }

        // Create and show the dropdown
        const dropdown = $('<div class="autocomplete-dropdown"></div>');
        const options = ['ReactJS', 'NextJS'];

        options.forEach(optionText => {
            const item = $('<div class="autocomplete-item"></div>').text(optionText);
            item.on('click', function(event) {
                event.stopPropagation(); // Prevents the document-level click handler from firing
                container.find('input').val(optionText); // Set the input value
                dropdown.remove(); // Close the dropdown
            });
            dropdown.append(item);
        });
        container.append(dropdown);
    });

    // --- Logic for Radio Card Selection (Agent Approach & Privacy) ---
    parentContainer.on('click', 'label[id$="-card"]', function() {
        const clickedCard = $(this);
        if (clickedCard.attr('id') === 'my-apps-create-app-access-type-private-to-members-card'){
             $('#team-members-app-studio-app').removeClass('force-hidden').addClass('force-visible');            
        }
        else if(clickedCard.attr('id') === 'my-apps-create-app-access-type-private-to-you-card' || clickedCard.attr('id') === 'my-apps-create-app-access-type-public-card'){
            console.log('else part');
           $('#team-members-app-studio-app').removeClass('force-visible').addClass('force-hidden');
        }
        const radioGroup = clickedCard.closest('[role="radiogroup"]');

        // De-select all cards in the same group and remove the 'is-selected' class
        radioGroup.find('label').removeClass('border-primary bg-primary/10 is-selected').addClass('border-gray-200');
        
        // Select the clicked card and add the 'is-selected' class (which shows the icon via CSS)
        clickedCard.addClass('border-primary bg-primary/10 is-selected').removeClass('border-gray-200');
        
        // Ensure the underlying radio input is checked for form submission
        clickedCard.find('input[type="radio"]').prop('checked', true);
    });

    // --- Close dropdown if clicking anywhere else on the page ---
    $(document).on('click', function(event) {
        if (!$(event.target).closest('#my-apps-create-app-template-autocomplete-wrapper').length) {
            $('.autocomplete-dropdown').remove();
        }
    });
}


// --- Function to hide the modal and initialize it ---
// This is the main function you call after your AJAX call succeeds.
function modal_popup() {
    const modal = $('#parent-main .MuiModal-root');
    if (modal.length) {
        modal.hide();
        // After hiding the modal, set up all its interactive elements.
        setupInteractiveModal();
    } else {
        console.warn("modal_popup() was called, but no modal was found.");
    }
}
