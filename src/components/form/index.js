import React, {PureComponent} from 'react';
import Controls from '../controls/';
import Preview from '../preview/';

export default class Form extends PureComponent {
	render() {
		return (<div className="form">
			<Controls />
			<Preview />
		</div>)
	}
}








