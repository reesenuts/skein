<script lang="ts">
    import emailjs from "emailjs-com";
    import { writable } from "svelte/store";
  
    let firstName = "";
    let lastName = "";
    let orderNumber = "";
    let email = "";
    let message = "";
    let isSubmitted = false;
    const errorMessage = writable<string>("");
  
    const serviceID = "service_c61nobn"; 
    const templateID = "template_sbr8cys"; 
    const publicKey = "sbeSMLSf-3mGXXi4X"; 

    const isFormValid = () => {
    return firstName && lastName && orderNumber && email && message && /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email);
    }
  
    
    const validateForm = () => {
      if (!firstName || !lastName || !orderNumber || !email || !message) {
        errorMessage.set("All fields are required.");
        return false;
      }
     
      const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      if (!emailRegex.test(email)) {
        errorMessage.set("Please enter a valid email address.");
        return false;
      }
      return true;
    };
  

    const sendEmail = async () => {
      if (!validateForm()) return;
  
      const emailData = {
        first_name: firstName,
        last_name: lastName,
        order_number: orderNumber,
        email,
        message,
      };
  
      try {
        const response = await emailjs.send(
          serviceID,
          templateID,
          emailData,
          publicKey
        );
        console.log("Email sent successfully", response);
        isSubmitted = true;
        firstName = "";
        lastName = "";
        orderNumber = "";
        email = "";
        message = "";
        errorMessage.set("");
        alert("Thank you! Your message has been sent.");
      } catch (error) {
        console.error("Error sending email", error);
        errorMessage.set("An error occurred while sending your message. Please try again.");
      }
    };
  </script>

<section class="h-[70vh] flex justify-center items-center overflow-y-auto">
    <form class="bg-darkPurple/95 w-3/5 p-16 rounded-3xl backdrop-bg-blur flex items-center justify-between gap-12">
        <div class="w-full">
            <h1 class="text-4xl font-bold text-light mb-6">✦ Contact Form</h1>
            <div class="flex flex-col gap-4">
              <!-- full name -->
              <div class="w-full flex flex-col gap-1">
                <div class="flex gap-2 items-center">
                    <p class="text-sm font-semibold text-light">Name</p>
                    {#if $errorMessage && (!firstName || !lastName)}
                    <p class="text-red-500 text-xs">Both first and last names are required.</p>
                    {/if}  
                </div>
                <div class="flex gap-2">
                  <input class="w-full p-3 rounded-lg text-xs border border-purple bg-lightPurple/10 text-light focus:border-light focus:outline-none" type="text" placeholder="first name"
                    bind:value={firstName} />
                  <input class="w-full p-3 rounded-lg text-xs border border-purple bg-lightPurple/10 text-light focus:border-light focus:outline-none" type="text" placeholder="last name"
                    bind:value={lastName} />
                </div>
              </div>
          
              <!-- order number -->
              <div class="w-full flex flex-col gap-1">
                <div class="flex gap-2 items-center">
                    <p class="text-sm font-semibold text-light">Order Number</p>
                    {#if $errorMessage && !orderNumber}
                    <p class="text-red-500 text-xs">Order number is required.</p>
                    {/if} 
                </div>
                <input class="w-full p-3 rounded-lg text-xs border border-purple bg-lightPurple/10 text-light focus:border-light focus:outline-none" type="text" placeholder="order number"
                  bind:value={orderNumber} />
              </div>
          
              <!-- email -->
              <div class="w-full flex flex-col gap-1">
                <div class="flex gap-2 items-center">
                  <p class="text-sm font-semibold text-light">Email</p>
                  {#if $errorMessage && !email}
                  <p class="text-red-500 text-xs">Email is required.</p>
                  {/if}
                  {#if $errorMessage && email && !/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)}
                    <p class="text-red-500 text-xs">Please enter a valid email address.</p>
                  {/if}
                </div>
                <input class="w-full p-3 rounded-lg text-xs border border-purple bg-lightPurple/10 text-light focus:border-light focus:outline-none" type="email" placeholder="your@email.com"
                  bind:value={email} />
              </div>
          
              <!-- message -->
              <div class="w-full flex flex-col gap-1">
                <div class="flex gap-2 items-center">
                  <p class="text-sm font-semibold text-light">Message</p>
                  {#if $errorMessage && !message}
                  <p class="text-red-500 text-xs">Message is required.</p>
                  {/if}
                </div>
                <textarea class="w-full p-3 rounded-lg text-xs border border-purple bg-lightPurple/10 text-light focus:border-light focus:outline-none" placeholder="Type your message here"
                  bind:value={message} >
                </textarea>
              </div>
          
              <!-- submit button -->
              <button class="w-full p-3 rounded-lg text-xs bg-lightPurple text-light mt-2 {isFormValid() ? 'bg-lightPurple text-light' : 'bg-backdrop text-muted cursor-not-allowed'}"
                disabled={!isFormValid()}
                on:click={sendEmail} >
                Send
              </button>
            </div>
          </div>

        <div class="w-full p-10 flex flex-col gap-10">
            <div class="flex flex-col gap-10 justify-center">
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm font-bold text-light">✦ Chat Us</h1>
                    <p class="text-xs text-light">Speak to our friendly team.</p>
                    <div class="mt-2 flex gap-2 items-center group hover:text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5c5470" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send group-hover:stroke-light">
                          <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"/>
                          <path d="m21.854 2.147-10.94 10.939"/>
                        </svg>
                        <a href="mailto:reesenuts.lili@gmail.com" class="text-xs font-medium text-light/50 hover:text-light group-hover:text-light">
                            reese.art
                        </a>
                    </div>
                    <div class="mt-2 flex gap-2 items-center group hover:text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5c5470" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram group-hover:stroke-light">
                          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                          <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                        </svg>
                        <a href="https://www.instagram.com/reese.nuts/" target="_blank" class="text-xs font-medium text-light/50 hover:text-light group-hover:text-light">
                            reese.art
                        </a>
                    </div>
                    <div class="mt-2 flex gap-2 items-center group hover:text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5c5470" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter group-hover:stroke-light">
                          <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/>
                        </svg>
                        <a href="https://x.com/reesenuts_lili" target="_blank" class="text-xs font-medium text-light/50 hover:text-light group-hover:text-light">
                            reese.art
                        </a>
                    </div>
                </div>
    
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm font-bold text-light">✦ Call Us</h1>
                    <p class="text-xs text-light">Call our team Mon-Fri from 8am to 5pm.</p>
                    <div class="mt-2 flex gap-2 items-center group hover:text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5c5470" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-headset group-hover:stroke-light">
                          <path d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"/>
                          <path d="M21 16v2a4 4 0 0 1-4 4h-5"/>
                        </svg>
                        <a href="tel:+639811879457" class="text-xs font-medium text-light/50 hover:text-light group-hover:text-light">
                            +63 9811 879 457
                        </a>
                    </div>
                </div>
    
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm font-bold text-light">✦ Visit Us</h1>
                    <p class="text-xs text-light">Chat to us in person at our Physical Store.</p>
                    <div class="mt-2 flex gap-2 items-center group hover:text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5c5470" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pinned group-hover:stroke-light">
                            <path d="M18 8c0 3.613-3.869 7.429-5.393 8.795a1 1 0 0 1-1.214 0C9.87 15.429 6 11.613 6 8a6 6 0 0 1 12 0"/>
                            <circle cx="12" cy="8" r="2"/>
                            <path d="M8.714 14h-3.71a1 1 0 0 0-.948.683l-2.004 6A1 1 0 0 0 3 22h18a1 1 0 0 0 .948-1.316l-2-6a1 1 0 0 0-.949-.684h-3.712"/>
                        </svg>
                        <a href="https://www.google.com/maps?q=SM+Central+1st+Floor,+Olongapo+City" target="_blank" class="text-xs font-medium text-light/50 group-hover:text-light">
                            SM Central 1st Floor, Olongapo City
                        </a>
                    </div>                    
                </div>
            </div>
        </div>
    </form>
</section>
