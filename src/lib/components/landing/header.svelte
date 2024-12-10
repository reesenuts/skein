<script lang="ts">
    import { base } from '$app/paths';
    import { goto } from '$app/navigation';

    const navigate = (path: string): void => {
        goto(`${base}${path}`);
    }
</script>

<header class="flex flex-col gap-2 mt-2">

    <!-- free shipping text -->
    <p class="text-xs text-center p-2 font-dmSans text-light/60 rounded-full"><span class="pr-2">✦</span>Free Shipping on All Orders over ₱1000<span class="pl-2">✦</span></p>
    <div class="flex justify-between bg-purple p-4 rounded-2xl gap-2">
        <!-- reese.art logo -->
        <div class="flex items-center gap-1 w-full">
            <p class=" text-light font-black text-3xl">✦</p>
        </div>
        <!-- navbar -->
        <nav class="flex gap-6 items-center text-light text-center justify-center text-xs p-2 w-full">
            <a href="{base}/" on:click|preventDefault={() => navigate('/')} class="hover:text-lightPurple">Home</a>
            <!-- === coming soon === -->
            <!-- <a href="/" class="hover:text-lightPurple">Commission</a> -->
            <a href="{base}/contact" on:click|preventDefault={() => navigate('/contact')} class="hover:text-lightPurple">Contact</a>  
            <a href="{base}/faq" on:click|preventDefault={() => navigate('/faq')} class="hover:text-lightPurple">FAQ</a>
        </nav>
        <!-- buttons -->
        <div class="flex w-full justify-end">
            <!-- shop button -->
            <a href="{base}/shop" class="flex items-center font-medium text-xs text-center text-light p-2 px-6 rounded-xl border-2 border-lightPurple hover:bg-lightPurple" aria-label="shop">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#DBD8E3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-store">
                    <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"/>
                    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/>
                    <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4"/>
                    <path d="M2 7h20"/>
                    <path d="M22 7v3a2 2 0 0 1-2 2a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12a2 2 0 0 1-2-2V7"/>
                </svg>
            </a>
            <!-- === coming soon === -->
            <!-- <a href="{base}/liked" class="flex items-center gap-1 p-2 rounded-xl hover:bg-lightPurple hover:text-lightPurple border-2 border-lightPurple" aria-label="liked products">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dbd8e3" viewBox="0 0 256 256"><path d="M178,36c-20.09,0-37.92,7.93-50,21.56C115.92,43.93,98.09,36,78,36a66.08,66.08,0,0,0-66,66c0,72.34,105.81,130.14,110.31,132.57a12,12,0,0,0,11.38,0C138.19,232.14,244,174.34,244,102A66.08,66.08,0,0,0,178,36Zm-5.49,142.36A328.69,328.69,0,0,1,128,210.16a328.69,328.69,0,0,1-44.51-31.8C61.82,159.77,36,131.42,36,102A42,42,0,0,1,78,60c17.8,0,32.7,9.4,38.89,24.54a12,12,0,0,0,22.22,0C145.3,69.4,160.2,60,178,60a42,42,0,0,1,42,42C220,131.42,194.18,159.77,172.51,178.36Z"></path></svg>
            </a> -->
        </div>
    </div>

</header>
