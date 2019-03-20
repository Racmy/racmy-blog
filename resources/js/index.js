import Example from '../../resources/js/components/Example'
import ReactDOM from 'react-dom'
import React from 'react'
import 'jquery'
import 'bootstrap'
import '@coreui/coreui'

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}

