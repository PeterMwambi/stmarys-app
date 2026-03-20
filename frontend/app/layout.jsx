export const metadata = {
    title: 'St. Mary\'s App',
    description: 'A website for ACK St. Mary\'s Church',
};


export default function RootLayout({ children }) {
    return (
        <html lang="en">
            <body>
                {children}
            </body>
        </html>
    );
}