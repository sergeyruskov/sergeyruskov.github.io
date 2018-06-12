import React, {PureComponent} from 'react';
import { compose } from 'redux';
import {connect} from 'react-redux';
import {sendForm} from "../../actions";
import { Link } from "react-router-dom";

class SubmitForm extends PureComponent {


	render() {
		const {
			preview,
			sendForm,
		} = this.props;


		return <Link className="btn-primary" to="/view" onClick={() => sendForm(preview)}>Отправить</Link>
	}
}

export default compose(
	connect(({preview}) => ({preview}), dispatch => ({
		sendForm: value => dispatch(sendForm(value)),
	}))
)(SubmitForm);

