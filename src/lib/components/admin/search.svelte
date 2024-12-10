

<!-- search, sort, filter -->
<div class="flex gap-2 mb-6">
    <!-- search bar -->
    <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5C5470" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 transform -translate-y-1/2">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
        </svg>
        <input class="pl-10 text-xs text-dmSans w-72 text-purple font-medium rounded-2xl p-3.5 bg-white focus:outline-none focus:outline-light placeholder:text-lightPurple placeholder:font-normal" type="text" placeholder="Search by category or product name."
         /> <!-- add logic here -->
    </div>

    <!-- buttons -->
    <div class="flex gap-2">
        <!-- filter button -->
        <button class="bg-white p-3 rounded-2xl" aria-label="filter">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5C5470" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-blend">
                <circle cx="9" cy="9" r="7" />
                <circle cx="15" cy="15" r="7" />
            </svg>
        </button>

        <!-- sort button -->
        <button class="bg-white p-3 rounded-2xl" aria-label="sort">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5C5470" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-down">
            <path d="m21 16-4 4-4-4" />
            <path d="M17 20V4" />
            <path d="m3 8 4-4 4 4"/>
            <path d="M7 4v16" />
            </svg>
        </button>

        <!-- add button -->
        <button class="bg-white p-3 rounded-2xl" aria-label="add">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5C5470" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus">
                <path d="M5 12h14"/>
                <path d="M12 5v14"/>
            </svg>
        </button>
      </div>
      
</div>