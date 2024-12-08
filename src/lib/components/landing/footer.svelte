<footer class="mb-2 bg-lightPurple p-6 flex flex-row rounded-2xl justify-between items-center">
    
    <!-- copyright text -->
    <div class="flex flex-col gap-1">
        <p class="text-xs text-darkPurple font-medium">© 2024 reesenuts.</p>
        <p class="font-regular text-white font-dmSans text-xs">Powered by <span class="text-white font-semibold">Svelte</span></p>
    </div>

    <!-- socials -->
    <div class="social flex gap-2 items-center">
        <!-- instagram -->
         <button class="p-2 rounded-xl border-2 border-light hover:bg-purple hover:text-lightPurple" aria-label="instagram button">
            <a href="https://www.instagram.com/reese.nuts/" target="_blank" aria-label="instagram link">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#DBD8E3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
            </a>
        </button>
        <!-- twitter -->
        <button class="p-2 rounded-xl border-2 border-light hover:bg-purple hover:text-lightPurple" aria-label="twitter button">
            <a href="https://www.instagram.com/reese.nuts/" target="_blank" aria-label="twitter link">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#DBD8E3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
        </button>
        <!-- qr code -->
        <button class="p-2 rounded-xl border-2 border-light hover:bg-purple hover:text-lightPurple" aria-label="qr button">
            <a href="https://www.instagram.com/reese.nuts/" target="_blank" aria-label="qrcode">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#DBD8E3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code"><rect width="5" height="5" x="3" y="3" rx="1"/><rect width="5" height="5" x="16" y="3" rx="1"/><rect width="5" height="5" x="3" y="16" rx="1"/><path d="M21 16h-3a2 2 0 0 0-2 2v3"/><path d="M21 21v.01"/><path d="M12 7v3a2 2 0 0 1-2 2H7"/><path d="M3 12h.01"/><path d="M12 3h.01"/><path d="M12 16v.01"/><path d="M16 12h1"/><path d="M21 12v.01"/><path d="M12 21v-1"/></svg>
            </a>
        </button>
    </div>

</footer>

<style>
    button:hover {
        box-shadow: 0 0 0 1px #DBD8E3, 0 0 0 4px rgba(255, 255, 255, 0); 
        transition: box-shadow 0.2s ease;
    }
</style>
