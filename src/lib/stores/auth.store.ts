import { writable } from 'svelte/store';

interface User {
    id: number;
    username: string;
    email: string;
    full_name: string;
}

function createAuthStore() {
    const { subscribe, set, update } = writable<User | null>(null);

    return {
        subscribe,
        login: (user: User) => set(user),
        logout: () => set(null),
        initialize: () => {
            const storedUser = localStorage.getItem('user');
            if (storedUser) {
                set(JSON.parse(storedUser));
            }
        }
    };
}

export const authStore = createAuthStore(); 