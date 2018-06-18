//@flow
import React from 'react';
import FactoryForm from './factory-form';
import View from './view';
import { BrowserRouter as Router, Route } from "react-router-dom";

export default function App() {
	return (
		<Router>
			<div className="App">
				<Route exact path="/" component={FactoryForm} />
				<Route path="/view" component={View} />
			</div>
		</Router>
	);
}

