import React from 'react';

const HomePage: React.FC = () => {
    return (
        <div className="home-page">
            <header>
                <h1>Welcome to StarMaker Clone</h1>
                <p>Your ultimate karaoke experience awaits!</p>
            </header>
            <main>
                <section>
                    <h2>Features</h2>
                    <ul>
                        <li>Real-time vocal effects</li>
                        <li>Duet and group recording</li>
                        <li>Live streaming capabilities</li>
                        <li>Social sharing and interaction</li>
                    </ul>
                </section>
                <section>
                    <h2>Get Started</h2>
                    <button onClick={() => alert('Start Singing!')}>Start Singing</button>
                </section>
            </main>
            <footer>
                <p>&copy; {new Date().getFullYear()} StarMaker Clone. All rights reserved.</p>
            </footer>
        </div>
    );
};

export default HomePage;