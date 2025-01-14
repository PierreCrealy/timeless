export interface User {
    id: number;
    firstname: string;
    lastname: string;
    email: string;
    email_verified_at?: string;
    created_at?: Date;
    updated_at?: Date;
}

export type PageProps<
    T extends Record<string, unknown> = Record<string, unknown>,
> = T & {
    auth: {
        user: User;
    };
};
