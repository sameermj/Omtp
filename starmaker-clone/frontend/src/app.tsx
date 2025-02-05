import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import HomePage from './pages';
import './styles/index.css';

const App: React.FC = () => {
  return (
    <Router>
      <div className="app">
        <Switch>
          <Route path="/" component={HomePage} exact />
          {/* Add more routes as needed */}
        </Switch>
      </div>
    </Router>
  );
};

export default App;