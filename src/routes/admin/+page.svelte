<script lang="ts">
    import { goto } from "$app/navigation";
</script>
  
  <!-- main content -->
  <div class="flex justify-center items-center">
    <div class="w-full max-w-md px-4">
      <!-- form -->
      <form class="flex flex-col w-full p-12">
        <!-- login title -->
        <h1 class="text-light/80 font-black text-3xl text-teal mb-6 text-center">
          access account
        </h1>
  
        <!-- input fields -->
        <div class="flex flex-col space-y-2">
          <input
            type="text"
            id="username"
           
            required
            placeholder="username"
            class="rounded-xl text-xs border-2 px-4 py-3 text-light/80 border-purple placeholder:text-xs focus:outline-none focus:ring-0 focus:border-lightPurple bg-transparent"
          />
          <input
            type="password"
            id="password"
           
            required
            placeholder="password"
            class="rounded-xl text-xs border-2 text-light/80 border-purple px-4 py-3 placeholder:text-xs focus:outline-none focus:ring-0 focus:border-lightPurple bg-transparent"
          />
        </div>
  
        <!-- login button -->
        <button
          type="submit"
          class="mt-4 font-medium px-4 py-4 text-xs rounded-xl bg-purple text-white/80 disabled:bg-drop disabled:text-muted w-full"
          >Continue →</button
        >
      </form>
    </div>
  </div>