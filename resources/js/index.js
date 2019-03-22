import Example from '../../resources/js/components/Example'
import ReactDOM from 'react-dom'
import React from 'react'
import 'jquery'
import 'bootstrap'
import '@coreui/coreui'
import 'draft-js/dist/Draft.css'

import '../sass/index.scss'

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}

