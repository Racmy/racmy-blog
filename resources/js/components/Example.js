import React from 'react';
import { Editor, EditorState, RichUtils, convertFromHTML, convertToRaw } from 'draft-js';
import "../../sass/editor.scss"
import 'draft-js/dist/Draft.css'

export default class Example extends React.Component {
    constructor (props) {
        super(props)
        // エディタの状態を空で初期化
        this.state = { editorState: EditorState.createEmpty() };
        // bind
        this.onChange = this.onChange.bind(this);
        this.onClick = this.onClick.bind(this);
        this.saveEditor = this.saveEditor.bind(this);
        this.getCurrentContent = this.getCurrentContent.bind(this);
        this.myBlockStyleFn = this.myBlockStyleFn.bind(this);
        this.onToggle = this.onToggle.bind(this)
        // キーバンド
        this.handleKeyCommand = this.handleKeyCommand.bind(this);
    }
    onChange (editorState) {
        this.setState({editorState})
        console.log(this.getCurrentContent())
    }
    onClick (e) {
        this.onChange(RichUtils.toggleInlineStyle(this.state.editorState, e.target.name))//inlinestyleでboldやITALICをつける
    }
    saveEditor() {
        var content = convertToRaw(this.state.editorState.getCurrentContent())
        console.log(content);
    }
    getCurrentContent () {
        return this.state.editorState.getCurrentContent()
    }
    myBlockStyleFn (contentBlcock) {
        const type = contentBlcock.getType()
        console.log(type)
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
        const styles = ['BOLD', 'ITALIC', 'UNDERLINE', 'CODE'];
        const inlineButtons = styles.map(style => {
            return <button key={style} onClick={this.onClick} name={style}>{style}</button>
        })
        const elements = ['unstyled', 'code-block', 'atomic', 'blockquote', 'header-one', 'header-two', 'header-three', 'header-four', 'header-five', 'header-six', 'unordered-list-item', 'ordered-list-item']
        const eleButtons = elements.map(element => {
            return <button key={element} onClick={this.onToggle} name={element} class="btn page-link text-dark d-inline-block rounded-0">{element}</button>
        })
        const saveButton = (
            <button onClick={this.saveEditor}>保存</button>
        )
        return (
            <div>
                <div class="flex-box-end">
                    {saveButton}
                </div>
                <div>
                    {eleButtons}
                </div>
                <div>
                    {inlineButtons}
                </div>
                <Editor
                    editorState={this.state.editorState}
                    handleKeyCommand={this.handleKeyCommand}
                    blockStyleFn={this.setStatemyBlockStyleFn}
                    onChange={this.onChange} />
            </div>
        );
    }
}
