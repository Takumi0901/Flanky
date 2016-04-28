import React from 'react'
import ReactDOM from 'react-dom'
import TabMenu from './tabMenus'


export default class Tab extends React.Component{

  handleTabClick(i){
    this.props.tabActive(i);
  }

  render(){
    return(
      <TabMenu onTabClick={this.handleTabClick.bind(this)} index={this.props.index}>
        <div id="tabset1" label="1st Panel">
            <div className="c-card__header"><h2>1st Panel</h2></div>
            <ul className="c-menu">
              <li className="c-menu__item"><a href="http://example.com" target="_blank">example.com</a></li>
              <li className="c-menu__item"><a href="http://example.com" target="_blank">example.com</a></li>
              <li className="c-menu__item"><a href="http://example.com" target="_blank">example.com</a></li>
            </ul>
          </div>
          <div id="tabset2" label="2nd Panel">
            <div className="c-card__header"><h2>2nd Panel</h2></div>
            <ul className="c-menu">
              <li className="c-menu__item"><a href="http://example.com" target="_blank">example.com</a></li>
              <li className="c-menu__item"><a href="http://example.com" target="_blank">example.com</a></li>
              <li className="c-menu__item"><a href="http://example.com" target="_blank">example.com</a></li>
            </ul>
          </div>
          <div id="tabset3" label="3rd Panel">
            <div className="c-card__header"><h2>3rd Panel</h2></div>
            <ul className="c-menu">
              <li className="c-menu__item"><a href="http://example.com" target="_blank">example.com</a></li>
              <li className="c-menu__item"><a href="http://example.com" target="_blank">example.com</a></li>
              <li className="c-menu__item"><a href="http://example.com" target="_blank">example.com</a></li>
            </ul>
          </div>
      </TabMenu>
    );
  }
}