import React from 'react';
import ReactDOM from 'react-dom';

function App() {
    return (
        <div className="text-center p-4">
            <h1 className="text-4xl font-bold text-blue-600">Hello from React!</h1>
        </div>
    );
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
