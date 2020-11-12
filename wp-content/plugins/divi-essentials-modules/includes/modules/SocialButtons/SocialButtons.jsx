// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class SocialButtons extends Component {

	static slug = 'dies_social_buttons';

	render() {

		console.log(this.props);

		return (
			<div className="dies-social-container">
				<ul className="dies-social-list">
					<li className="dies-social-list--item"><a href={ this.props.whatsapp }><i className="fab fa-whatsapp" ></i></a></li>
					<li className="dies-social-list--item"><a href={ this.props.facebook }><i className="fab fa-facebook-square" ></i></a></li>
					{/* <li className="dies-social-list--item"><a href=""><i className="fab fa-instagram" ></i></a></li> */}
				</ul>
			</div>
		);
	}
}

export default SocialButtons;
