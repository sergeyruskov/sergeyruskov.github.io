import React, {PureComponent} from 'react';
import PropTypes from 'prop-types';
import { compose } from 'redux';
import {connect} from "react-redux";
import {copyCard} from "../../actions";


class CardInput extends PureComponent {
	static propTypes = {
		card: PropTypes.object.isRequired,
		id: PropTypes.number.isRequired,
		copyCard: PropTypes.func.isRequired,
	};

	submit = () => {
		const {copyCard, card} = this.props;
		copyCard(card);
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
		copyCard: value => dispatch(copyCard(value)),
	}))
)(CardInput);
