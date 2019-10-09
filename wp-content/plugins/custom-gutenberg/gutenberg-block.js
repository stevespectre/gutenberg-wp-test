var el = wp.element.createElement;
var richText = wp.editor.RichText;

wp.blocks.registerBlockType('gutenberg/custom-title-block', {
  title: 'Custom Title',
  description: 'Block to generate a custom Title',
  icon: 'shield-alt',
  category: 'common',

  attributes: {
    title: {type: 'string'},
    text: {type: 'string'}
  },

  edit: function(props) {
    function updateTitle(event) {
      props.setAttributes({title: event.target.value})
    }

    function updateText(newText) {
      props.setAttributes({text: newText})
    }

    return el('div',{className: 'custom-title'},
      
        el("input", { 
          type: "text", 
          placeholder: 'Enter title here',
          class: 'custom-title-input',
          value: props.attributes.title, 
          onChange: updateTitle 
        }),
      
        el(richText, { 
          tagName: 'p',
          placeholder: 'Enter text here', 
          value: props.attributes.text, 
          onChange: updateText
        }),
    );
  },

  save: function(props){
    return el('div',{className: 'row custom-title'},
      el('h1',{className: 'col-12'},props.attributes.title),
      el(richText.Content,
        {
          tagName: 'p',
          value: props.attributes.text
        }),
    )
  }
});