import React from 'react';
import { Editor, EditorState, RichUtils, convertToRaw, DefaultDraftBlockRenderMap} from 'draft-js';
import { Map } from 'immutable'
import "../../sass/editor.scss"
import 'draft-js/dist/Draft.css'

export default class Example extends React.Component {
    constructor (props) {
        super(props)

        this.state = { editorState: EditorState.createEmpty() };
        // bind
        this.onChange = this.onChange.bind(this);
        this.onClick = this.onClick.bind(this);
        this.saveEditor = this.saveEditor.bind(this);
        this.getCurrentContent = this.getCurrentContent.bind(this);
        this.myBlockStyleFn = this.myBlockStyleFn.bind(this);
        this.onToggle = this.onToggle.bind(this)
        this.handleKeyCommand = this.handleKeyCommand.bind(this);
    }
    onChange (editorState) {
        this.setState({editorState})
    }
    onClick (e) {
        this.onChange(RichUtils.toggleInlineStyle(this.state.editorState, e.target.name))//inlinestyleでboldやITALICをつける
    }
    saveEditor() {
        var content = convertToRaw(this.state.editorState.getCurrentContent())
    }
    getCurrentContent () {
        return this.state.editorState.getCurrentContent()
    }
    myBlockStyleFn (block) {
        switch (block.getType()) {
            case 'code-block':
                return 'language-javascript';
            case 'header-one':
                return 'b_h1'
            case 'header-two':
                return 'b_h2'
            case 'header-three':
                return 'b_h3'
            default:
                return null;
        }
    }
    onToggle (e)  {
        const editorState = RichUtils.toggleBlockType(this.state.editorState, e.target.name);
        this.setState({ editorState });
    }
    handleKeyCommand (command) {
        const newState = RichUtils.handleKeyCommand(this.state.editorState, command);
        if (newState) {
            this.onChange(newState);
            return true;
        }
        return false;
    }
    render() {
        const styles = {
            bold: 'BOLD',
            italic: 'ITALIC',
            underline: 'UNDERLINE',
        };
        const inlineButtons = Object.keys(styles).map(style => {
            return (<button key={style} onClick={this.onClick} name={styles[style]} className="btn page-link text-dark d-inline-block rounded-0">
                        <i className={"fas fa-" + style}></i>
                    </button>)
        })
        const elements = {
            p: 'unstyled',
            code: 'code-block',
            h1: 'header-one',
            h2: 'header-two',
            h3: 'header-three',
            h4: 'header-four',
            h5: 'header-five',
            h6: 'header-six',
            ul: 'unordered-list-item',
            ol: 'ordered-list-item'
        }
        const elementButtons = Object.keys(elements).map(tagName => {
            return <button key={tagName} onClick={this.onToggle} name={elements[tagName]} className="btn page-link text-dark d-inline-block rounded-0">{tagName}</button>
        })
        const saveButtons = (
            <div>
                <button onClick={this.saveEditor} className="btn page-link text-dark d-inline-block rounded-0">投稿</button>
                <button onClick={this.saveEditor} className="btn page-link text-dark d-inline-block rounded-0">下書き</button>
            </div>
        )
        // convertH
        const customRenderMap = Map({
            'unstyled': {
                element: 'div',
                aliasedElements: ['p'],
            },
        });
        const extendedBlockRenderMap = DefaultDraftBlockRenderMap.merge(customRenderMap);

        return (
            <div>
                <div className="flex-box-end">
                    {saveButtons}
                </div>
                <div className="row">
                    <div className="col-md-6">
                        <div>
                            {elementButtons}
                        </div>
                        <div>
                            {inlineButtons}
                        </div>
                    </div>
                    <div className="col-md-6">
                        <div className="row">
                            <div className="form-group col-md-6">
                                <label htmlFor="exampleSelect1exampleFormControlSelect1">カテゴリの選択</label>
                                <div className="row">
                                    <input className="form-control col-md-6"></input>
                                    <select className="form-control col-md-6" id="exampleFormControlSelect1">
                                        <option>PHP</option>
                                        <option>Ruby</option>
                                        <option>JavaScript</option>
                                        <option>環境構築</option>
                                    </select>
                                </div>
                            </div>
                            <div className="form-group col-md-6">
                                <label htmlFor="exampleSelect1exampleFormControlSelect1">タグの選択</label>
                                <div className="row">
                                    <input className="form-control col-md-6"></input>
                                    <select className="form-control col-md-6" id="exampleFormControlSelect1">
                                        <option>Vue.js</option>
                                        <option>React.js</option>
                                        <option>Laravel</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div onClick={this.focus}>
                    <Editor
                        editorState={this.state.editorState}
                        handleKeyCommand={this.handleKeyCommand}
                        blockStyleFn={this.setStatemyBlockStyleFn}
                        blockRenderMap={extendedBlockRenderMap}
                        blockStyleFn={this.myBlockStyleFn}
                        onChange={this.onChange}
                        />
                </div>
            </div>
        );
    }
}
