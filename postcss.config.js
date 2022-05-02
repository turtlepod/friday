const path = require('path');

module.exports = ({ file, env }) => {
	const config = {
		plugins: {},
	};

	// Only load postcss-editor-styles plugin when we're processing the editor-style.css file.
	if (path.basename(file) === 'editor.css') {
		config.plugins['postcss-editor-styles'] = {
			scopeTo: '.editor-styles-wrapper',
			ignore: [':root', '.edit-post-visual-editor.editor-styles-wrapper', '.wp-toolbar'],
			remove: ['html', ':disabled', '[readonly]', '[disabled]'],
			tags: ['button', 'input', 'label', 'select', 'textarea', 'form' ],
		};
	}

	config.plugins['postcss-import'] = {};
	config.plugins['postcss-mixins'] = {};
	config.plugins['postcss-preset-env'] = {
		stage: 0,
		autoprefixer: {
			grid: true,
		},
		features: {
			'custom-properties': false,
		},
	};

	config.plugins.cssnano =
		env === 'production'
			? {
					preset: [
						'default',
						{
							autoprefixer: false,
							calc: {
								precision: 8,
							},
							convertValues: true,
							discardComments: {
								remove: (comment) =>
									!comment.includes('critical:') && !comment.includes('global:'),
							},
							mergeLonghand: false,
							zindex: false,
						},
					],
			  }
			: false;

	return config;
};
