<?php

namespace Studio1902\PeakCommands\Commands;

trait InstallBlockBlocks {

    public function getBlocks() {
        return
            [
                'Call to action: Show a call to action. [call_to_action]',
                'Collection: Show collection entries. [collection]',
                'Columns: Text columns with optional images and buttons. [columns]',
                'Divider: A visual divider between blocks. [divider]',
                'Full width image: A full width image with optional text and button(s). [full_width_image]',
                'Index content: Render the currently mounted entries if available. [index_content]',
                'Image and text: An image and text side by side. [image_and_text]',
                'Images grid: A multi row image grid. [images_grid]',
                'Link blocks: Blocks that link using the button fieldset. [link_blocks]',
                'Text columns: Text wrapping in two columns. [text_columns]',
            ]
        ;
    }
}
