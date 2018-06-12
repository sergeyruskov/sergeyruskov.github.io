import React, {PureComponent} from 'react';
import './App.css';
import Form from './components/form';
import ViewForm from './components/view-form';
import { BrowserRouter as Router, Route } from "react-router-dom";

export default class App extends PureComponent {
	render() {
		return (
			<Router>
				<div className="App">
					<Route exact path="/" component={Form} />
					<Route path="/view" component={ViewForm} />
				</div>
			</Router>
		);
	}
}

