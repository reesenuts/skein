<script lang="ts">
    let expandedStates = new Array(7).fill(false); 
  
    function toggleExpand(index: number) {
        expandedStates = expandedStates.map((_, i) => i === index ? !expandedStates[i] : false);
    }
  
    const faqItems = [
      { question: "About reese.art", answer: "I am a Frontend Developer and UI Designer based in the Philippines, and I've decided to open a small online store. Thank you for your support — I hope you enjoy my products!" },
      { question: "Contact", answer: "For any shop or order inquiries, please use the contact form or my Instagram, and be sure to include your order number." },
      { question: "When will my order be shipped?", answer: "Orders with in-stock items ship within 3 business days. Pre-order items will delay shipment until all items are in stock. For faster processing, please leave a note. Thank you." },
      { question: "When will I receive my order?", answer: "Luzon - 3 days <br>Visayas - 5 days <br>Mindanao - 10 days <br>Please note that these are estimates only!" },
      { question: "Do you ship internationally?", answer: "Unfortunately, we do not ship internationally at this time." },
      { question: "Order Changes", answer: "Please contact me for any order changes as soon as possible through the contact page. I am unable to modify an order once it has been dispatched." },
      { question: "Refunds and Exchanges", answer: "Please note that refunds or exchanges are not provided unless an item arrives defective or damaged." }
    ];
</script>

<section id="faq">
    <div class="h-[70vh] flex justify-center items-center overflow-y-auto">
      <!-- questions -->
      <div class="flex flex-col gap-2 p-2 items-center w-full text-light text-sm font-semibold">
        {#each faqItems as item, i}
          <div class="bg-purple backdrop-blur-lg p-6 rounded-3xl w-[600px]">
            <div class="flex items-center justify-between">
              <h1>{item.question}</h1>
              <button aria-label="expand" on:click={() => toggleExpand(i)}>
                {#if expandedStates[i]}
                  <!-- collapse icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5c5470" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-minus">
                    <path d="M5 12h14" />
                  </svg>
                {:else}
                  <!-- expand icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5c5470" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus">
                    <path d="M5 12h14" />
                    <path d="M12 5v14" />
                  </svg>
                {/if}
              </button>
            </div>
            <p class={`transition-all max-h-0 overflow-hidden ${expandedStates[i] ? 'max-h-[100px] opacity-100' : 'opacity-0'}`}>{@html item.answer}</p>
          </div>
        {/each}
      </div>
    </div>
</section>

<style>
  p {
    font-family: 'DM Sans';
    font-size: small;
    color: #5C5470;
    font-weight: 500;
  }
</style>
