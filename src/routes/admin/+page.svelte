<script lang="ts">
    import { goto } from "$app/navigation";
    import { ApiService } from '$lib/services/api.service.js';

    let username = "";
    let password = "";
    let error: string | null = null;
    let loading = false;

    async function handleSubmit(event: Event) {
        event.preventDefault();
        loading = true;
        error = null;

        try {
            const response = await ApiService.login({
                email: username, // Using username field as email
                password
            });

            if (response.error) {
                error = response.error;
                return;
            }

            if (response.success) {
                // Store user data in localStorage or a store if needed
                localStorage.setItem('user', JSON.stringify(response));
                await goto('/admin/dashboard');
            }
        } catch (e) {
            error = e instanceof Error ? e.message : 'Login failed. Please try again.';
        } finally {
            loading = false;
        }
    }
</script>

<!-- main content -->
<div class="flex justify-center items-center">
    <div class="w-full max-w-md px-4">
        <!-- form -->
        <form class="flex flex-col w-full p-12" on:submit={handleSubmit}>
            <!-- login title -->
            <h1 class="text-light/80 font-black text-3xl text-teal mb-6 text-center">
                access account
            </h1>

            <!-- error message -->
            {#if error}
                <p class="text-red-500 text-xs mb-4 text-center">{error}</p>
            {/if}

            <!-- input fields -->
            <div class="flex flex-col space-y-2">
                <input
                    type="text"
                    id="username"
                    bind:value={username}
                    required
                    placeholder="username"
                    class="rounded-xl text-xs border-2 px-4 py-3 text-light/80 border-purple placeholder:text-xs focus:outline-none focus:ring-0 focus:border-lightPurple bg-transparent"
                />
                <input
                    type="password"
                    id="password"
                    bind:value={password}
                    required
                    placeholder="password"
                    class="rounded-xl text-xs border-2 text-light/80 border-purple px-4 py-3 placeholder:text-xs focus:outline-none focus:ring-0 focus:border-lightPurple bg-transparent"
                />
            </div>

            <!-- login button -->
            <button
                type="submit"
                disabled={loading}
                class="mt-4 font-medium px-4 py-4 text-xs rounded-xl bg-purple text-white/80 disabled:bg-drop disabled:text-muted w-full flex justify-center items-center gap-2"
            >
                {#if loading}
                    <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processing...
                {:else}
                    Continue →
                {/if}
            </button>
        </form>
    </div>
</div>