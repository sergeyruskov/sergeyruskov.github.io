import React from 'react';
import Form from './components/form';
import View from './components/view';
import { BrowserRouter as Router, Route } from "react-router-dom";

export default function App() {
	return (
		<Router>
			<div className="App">
				<Route exact path="/" component={Form} />
				<Route path="/view" component={View} />
			</div>
		</Router>
	);
}

