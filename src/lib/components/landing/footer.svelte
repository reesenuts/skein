<footer class="mb-2 bg-lightPurple p-6 flex flex-row rounded-2xl justify-between items-center">
    
    <!-- copyright text -->
    <div class="flex flex-col gap-1">
        <p class="text-xs text-darkPurple font-medium">© 2024 reesenuts.</p>
        <p class="font-regular text-white font-dmSans text-xs">Powered by <span class="text-white font-semibold">Svelte</span></p>
    </div>
    

    <!-- logo -->
     <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#352F44" viewBox="0 0 256 256"><path d="M228,120c0,22.63-6,36.72-17.93,41.87a27.3,27.3,0,0,1-11,2.13,41.75,41.75,0,0,1-8.4-.93,4.05,4.05,0,0,1-2.52-1.64,368.49,368.49,0,0,0-47.75-55.26,8,8,0,0,0-11,11.62c14.84,13.91,64.13,63.49,78.32,120.27a8,8,0,0,1-5.82,9.7A8.13,8.13,0,0,1,200,248a8,8,0,0,1-7.75-6.06c-4.12-16.47-11.65-32.48-20.46-47.09a25.85,25.85,0,0,1-1.9,7.21C164.72,214,150.63,220,128,220s-36.72-6-41.88-17.94c-5.45-12.58-.39-30.82,15-54.21.68-1,1.36-2,2-3l-3,2C82.84,158.27,68.35,164,56.89,164a27.3,27.3,0,0,1-11-2.13C34,156.72,28,142.63,28,120s6-36.72,17.93-41.88c12.59-5.45,30.83-.39,54.22,15l3,2q-1-1.5-2-3c-15.41-23.39-20.47-41.63-15-54.22C91.28,26,105.37,20,128,20s36.72,6,41.88,17.93c5.45,12.59.39,30.83-15,54.22q-1,1.53-2,3l3-2c23.39-15.41,41.63-20.47,54.22-15C222,83.28,228,97.37,228,120Z"></path></svg>
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
