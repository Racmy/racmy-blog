import Editor from '../../resources/js/components/Editor'
import ReactDOM from 'react-dom'
import React from 'react'
import 'jquery'
import 'bootstrap'
import '@coreui/coreui'

import '../sass/index.scss'

if (document.getElementById('example')) {
    ReactDOM.render(<Editor />, document.getElementById('example'));
}

