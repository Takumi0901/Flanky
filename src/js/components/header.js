import React from 'react'
import { Router, Route, Link, browserHistory } from 'react-router'

export default class Header extends React.Component{
	constructor(props) {
    super(props);
    this.state = {position: 0};
  }
	onScroll(e){
		let scroll = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
		if(scroll > 0){
			if(scroll > this.state.position){
				this.props.headerAction(true);
			}else{
				this.props.headerAction(false);
			}
		}else{
			this.props.headerAction(false);
		}
		this.state = {position: scroll};
	}
	componentDidMount() {
		window.addEventListener('scroll', this.onScroll.bind(this));
  }
	render(){
		let scrollPos = this.props.scroll.down;
		return(
		  <header role="banner" className="c-drawer-fixed-bar c-bar u-mb-32" aria-slidedown={scrollPos === true ? 'true' : 'false'}>
				<div className="c-bar__inner">
				  <div className="c-grid c-grid--gutters">
						<div className="c-grid__col c-grid__col--4of12">
							<h1>React Tutorial ES6</h1>
						</div>
						<div className="c-grid__col c-grid__col--8of12">
							<ul className="c-nav c-nav--right">
								<li className="c-nav__item">
									<Link to="/">index</Link>
								</li>
								<li className="c-nav__item">
									<Link to="/intro">Intro</Link>
								</li>
								<li className="c-nav__item">
									<Link to="/modal">Modal</Link>
								</li>
							</ul>
						</div>
					</div>
			  </div>
			</header>
		)
	}
}