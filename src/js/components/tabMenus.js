import React from 'react'

export default class TabMenu extends React.Component{
  
  handleClick(i){
    this.props.onTabClick(i);
    this.refs['tab' + i].focus();
  }

  render(){
    let curtIndex = this.props.index.action;
    let tabs = this.props.children.map((child, i) => {
      return (
        <li className="c-tab__menu__item" key={i}>
          <a href="#" className="c-tab-btn c-tab-btn--sp js-tab-btn" onClick={this.handleClick.bind(this, i)} ref={'tab' + i} aria-selected={curtIndex === i ? 'true' : 'false'}>
            {child.props.label}
          </a>
        </li>
      );
    });
    let panels = this.props.children.map((child, i) => {
      return (
        <div className="c-tab__body js-tab-body"
             role="tabpanel"
             key={i}
             id={child.props.id}
             aria-hidden={curtIndex === i ? 'false' : 'true'}>
          <div className="c-card">
            {child}
          </div>
        </div>
      );
    });

    return(
      <div className="c-container">
        <div className="c-tab">
          <ul className="c-tab__menu">
            {tabs}
          </ul>
          <div>{panels}</div>
        </div>
      </div>
    );
  }
}