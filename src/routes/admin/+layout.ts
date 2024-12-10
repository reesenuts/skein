import { redirect } from '@sveltejs/kit';
import type { LayoutLoad } from './$types';

export const load: LayoutLoad = async ({ url }) => {
    // Skip auth check for login page
    if (url.pathname === '/admin') {
        return {};
    }

    const user = localStorage.getItem('user');
    
    if (!user) {
        throw redirect(307, '/admin');
    }

    return {};
}; 