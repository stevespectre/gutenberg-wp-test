const { registerBlockType} = wp.blocks;

registerBlockType('gutenberg/custom-title-block', {
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
    function updateText(event) {
      props.setAttributes({text: event.target.value})
    }
    return React.createElement(
      'div',
      {className: 'custom-title'},
      React.createElement("input", { 
        type: "text", 
        placeholder: 'Enter title here',
        class: 'custom-title-input',
        value: props.attributes.title, 
        onChange: updateTitle 
      }),
      React.createElement("textarea", { 
        type: "text", 
        placeholder: 'Enter text here', 
        value: props.attributes.text, 
        onChange: updateText
      }),
    );
  },

  save(props){
    return wp.element.createElement(
      'div',
      {className: 'row custom-title'},
      wp.element.createElement(
        'h1',
        {className: 'col-12'},
        props.attributes.title
      ),
      wp.element.createElement(
        'p',
        {className: 'col-12'},
        props.attributes.text
      ),
    )
  }
});