import React from 'react';
import ReactDOM from 'react-dom';

import Carender_package from "./general_components/carender_package";
import CustomSeparator from "./home_components/route";
import CenteredTabs from "./home_components/default_tab";
import ListDividers from "./home_components/menu";
import Slide from "./home_components/slide";
import Gift from "./home_components/gift_slide";
import Footer from "./home_components/footer";


if (document.getElementById('route')) {
    ReactDOM.render(<CustomSeparator />, document.getElementById('route'));
}
if (document.getElementById('slide')) {
    ReactDOM.render(<Slide />, document.getElementById('slide'));
}
if (document.getElementById('default_tab')) {
    ReactDOM.render(<CenteredTabs />, document.getElementById('default_tab'));
}
if (document.getElementById('menu_list')) {
    ReactDOM.render(<ListDividers />, document.getElementById('menu_list'));
}
if (document.getElementById('items')) {
    ReactDOM.render(<Gift />, document.getElementById('items'));
}
if (document.getElementById('carender_package')) {
    ReactDOM.render(<Carender_package />, document.getElementById('carender_package'));
}
if (document.getElementById('footer')) {
    ReactDOM.render(<Footer />, document.getElementById('footer'));
}