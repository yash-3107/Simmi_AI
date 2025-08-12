function app_dropdown() {
    // Target the clickable part of all your dropdown components
    $('.MuiSelect-select').on('click', function(event) {
        event.stopPropagation();
        
        const selectTrigger = $(this);
        // Find the specific parent container for THIS dropdown
        const positionContainer = selectTrigger.closest('.relative');

        // Check if this dropdown's menu is already open. If so, close it and stop.
        if (positionContainer.find('.framework-dropdown-menu').length > 0) {
            positionContainer.find('.framework-dropdown-menu').remove();
            return;
        }

        // --- Important: Close any OTHER open dropdown menus first ---
        $('.framework-dropdown-menu').remove();

        // --- Get the unique options for THIS dropdown from its data-attribute ---
        // jQuery's .data() method automatically parses the JSON string.
        const options = positionContainer.data('options') || [];

        // If no options are defined for this dropdown, do nothing.
        if (options.length === 0) {
            console.warn('No data-options found for this dropdown.');
            return;
        }

        // --- Create the dropdown menu ---
        const dropdownMenu = $('<div class="framework-dropdown-menu"></div>');

        options.forEach(opt => {
            const item = $(`<div class="framework-dropdown-item" data-value="${opt.value}">${opt.text}</div>`);
            item.on('click', function() {
                // Update the visible text. Handle complex content like the "Active" status dot.
                // For simplicity here, we create new content. You might need more complex logic.
                // This example just updates the text.
                const newDisplay = opt.text.includes('Active') 
                    ? `<div class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-green-500"></span>${opt.text}</div>` 
                    : opt.text;

                selectTrigger.html(newDisplay); // Use .html() to render the status dot correctly
                
                // Update the hidden input's value
                selectTrigger.closest('.MuiInputBase-root').find('.MuiSelect-nativeInput').val(opt.value);
                
                dropdownMenu.remove(); // Close menu on selection
            });
            dropdownMenu.append(item);
        });

        // --- Manually Calculate Position and Append ---
        const triggerPos = selectTrigger.position();
        const triggerHeight = selectTrigger.outerHeight();
        const triggerWidth = selectTrigger.outerWidth();

        positionContainer.append(dropdownMenu);

        dropdownMenu.css({
            top: triggerPos.top + triggerHeight + 4,
            left: triggerPos.left,
            width: triggerWidth
        });
    });

    // --- Global click-away listener to close any open menu ---
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.framework-dropdown-menu, .MuiSelect-select').length) {
            $('.framework-dropdown-menu').remove();
        }
    });
}
