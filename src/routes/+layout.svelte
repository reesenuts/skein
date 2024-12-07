<!-- <script lang="ts">
	import '../app.css';
	let { children } = $props();
</script>

{@render children()} -->

<script>
	import '../app.css';
	import { writable } from 'svelte/store';
	import { page } from '$app/stores';
	import Header from '$lib/components/landing/header.svelte';
	import Footer from '$lib/components/landing/footer.svelte';
	
	let { children } = $props();
	const isMenuOpen = writable(false);
    
	function toggleMenu() {
	    isMenuOpen.update(value => !value);
	}
 </script>
 
 <div class="min-h-screen flex flex-col justify-between">
	<Header />
	
	<main class="">
	    {#if $page.url.pathname === '/'}
		   {@render children()}
	    {:else}
		   {@render children()}
	    {/if}
	</main>
 
	<Footer />
 </div>