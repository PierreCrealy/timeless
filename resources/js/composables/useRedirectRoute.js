export function useRedirectRoute(path) {
    try {
        window.location.href = path;
    } catch (error) {
        console.error('Redirection failed:', error);
    }
}
