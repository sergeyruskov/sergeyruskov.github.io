import React, {PureComponent} from 'react';
import PropTypes from 'prop-types';
import { compose } from 'redux';
import {connect} from "react-redux";
import {addCard} from "../../actions";


class CardInput extends PureComponent {
	static propTypes = {
		card: PropTypes.object.isRequired,
		id: PropTypes.number.isRequired,
		addCard: PropTypes.func.isRequired,
	};

	submit = () => {
		const {addCard, card} = this.props;
		addCard(card);
	};

	render() {
		const {text} = this.props;
		return <li className="controls-add__item" onClick={this.submit}>
			{text}
		</li>
	}
}

export default compose(
	connect(() => ({}), dispatch => ({
		addCard: value => dispatch(addCard(value)),
	}))
)(CardInput);
