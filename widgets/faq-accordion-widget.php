<?php
namespace Elementor;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class FAQ_Accordion_Widget extends Widget_Base {

    public function get_name() {
        return 'faq-accordion';
    }

    public function get_title() {
        return __('FAQ Accordion', 'dynamic-faq-accordion-for-elementor');
    }

    public function get_icon() {
        return 'eicon-accordion';
    }

    public function get_categories() {
        return ['general'];
    }

    protected function register_controls() {
        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'dynamic-faq-accordion-for-elementor'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'faq_content',
            [
                'label' => __('FAQ Content', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => "<h2>Question 1</h2><p>Answer to question 1.</p><h2>Question 2</h2><p>Answer to question 2.</p>",
                'description' => __('Enter your FAQ content with <h2> tags for questions and following content as answers. If empty, content will be pulled from the post\'s FAQ metabox.', 'dynamic-faq-accordion-for-elementor'),
            ]
        );

        $this->add_control(
            'question_title_tag',
            [
                'label' => __('Title tag', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'h2' => __('H2', 'dynamic-faq-accordion-for-elementor'),
                    'h3' => __('H3', 'dynamic-faq-accordion-for-elementor'),
                    'h4' => __('H4', 'dynamic-faq-accordion-for-elementor'),
                    'h5' => __('H5', 'dynamic-faq-accordion-for-elementor'),
                    'h6' => __('H6', 'dynamic-faq-accordion-for-elementor'),
                    'div' => __('div', 'dynamic-faq-accordion-for-elementor'),
                ],
                'default' => 'h3',
            ]
        );

        $this->end_controls_section();

        // Style Section: Item
        $this->start_controls_section(
            'style_item_section',
            [
                'label' => __('Item Style', 'dynamic-faq-accordion-for-elementor'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );        


        $this->add_control(
            'item_background_color',
            [
                'label' => __('Background Color', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'item_border_style',
            [
                'label' => __('Border Style', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'none' => __('None', 'dynamic-faq-accordion-for-elementor'),
                    'solid' => __('Solid', 'dynamic-faq-accordion-for-elementor'),
                    'dashed' => __('Dashed', 'dynamic-faq-accordion-for-elementor'),
                    'dotted' => __('Dotted', 'dynamic-faq-accordion-for-elementor'),
                    'double' => __('Double', 'dynamic-faq-accordion-for-elementor'),
                ],
                'default' => 'solid',
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item' => 'border-style: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'item_border_width',
            [
                'label' => __('Border Width', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 20,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item' => 'border-width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'item_border_style!' => 'none',
                ],
            ]
        );

        $this->add_control(
            'item_border_color',
            [
                'label' => __('Border Color', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'item_border_style!' => 'none',
                ],
            ]
        );

        $this->add_control(
            'item_border_radius',
            [
                'label' => __('Border Radius', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_padding',
            [
                'label' => __('Padding', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_margin',
            [
                'label' => __('Margin', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_section();



        
        // Style Section: Question
        $this->start_controls_section(
            'style_question_section',
            [
                'label' => __('Question Style', 'dynamic-faq-accordion-for-elementor'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'question_background_color',
            [
                'label' => __('Background Color', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item .question-title' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'question_text_color',
            [
                'label' => __('Text Color', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item .question-title' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->add_control(
            'question_border_style',
            [
                'label' => __('Border Style', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'none' => __('None', 'dynamic-faq-accordion-for-elementor'),
                    'solid' => __('Solid', 'dynamic-faq-accordion-for-elementor'),
                    'dashed' => __('Dashed', 'dynamic-faq-accordion-for-elementor'),
                    'dotted' => __('Dotted', 'dynamic-faq-accordion-for-elementor'),
                    'double' => __('Double', 'dynamic-faq-accordion-for-elementor'),
                ],
                'default' => 'solid',
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item .question-title' => 'border-style: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'question_border_width',
            [
                'label' => __('Border Width', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 20,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item .question-title' => 'border-width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'question_border_style!' => 'none',
                ],
            ]
        );

        $this->add_control(
            'question_border_color',
            [
                'label' => __('Border Color', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item .question-title' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'question_border_style!' => 'none',
                ],
            ]
        );

        $this->add_control(
            'question_border_radius',
            [
                'label' => __('Border Radius', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item .question-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'question_typography',
                'selector' => '{{WRAPPER}} .faq-accordion-item .question-title',
            ]
        );

        $this->add_responsive_control(
            'question_padding',
            [
                'label' => __('Padding', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item .question-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'question_margin',
            [
                'label' => __('Margin', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-item .question-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style Section: Answer
        $this->start_controls_section(
            'style_answer_section',
            [
                'label' => __('Answer Style', 'dynamic-faq-accordion-for-elementor'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'answer_text_color',
            [
                'label' => __('Text Color', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-content' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'answer_background_color',
            [
                'label' => __('Background Color', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-content' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'answer_border_style',
            [
                'label' => __('Border Style', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'none' => __('None', 'dynamic-faq-accordion-for-elementor'),
                    'solid' => __('Solid', 'dynamic-faq-accordion-for-elementor'),
                    'dashed' => __('Dashed', 'dynamic-faq-accordion-for-elementor'),
                    'dotted' => __('Dotted', 'dynamic-faq-accordion-for-elementor'),
                    'double' => __('Double', 'dynamic-faq-accordion-for-elementor'),
                ],
                'default' => 'solid',
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-content' => 'border-style: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'answer_border_width',
            [
                'label' => __('Border Width', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 20,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-content' => 'border-width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'answer_border_style!' => 'none',
                ],
            ]
        );

        $this->add_control(
            'answer_border_color',
            [
                'label' => __('Border Color', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-content' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'answer_border_style!' => 'none',
                ],
            ]
        );

        $this->add_control(
            'answer_border_radius',
            [
                'label' => __('Border Radius', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'answer_typography',
                'selector' => '{{WRAPPER}} .faq-accordion-content',
            ]
        );

        $this->add_responsive_control(
            'answer_padding',
            [
                'label' => __('Padding', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'answer_margin',
            [
                'label' => __('Margin', 'dynamic-faq-accordion-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $faq_content = $settings['faq_content'];
        $question_title_tag = $setting['question_title_tag'];
        if ($question_title_tag == null){
            $question_title_tag='h2';
        }
        
        // اگه محتوای ویجت خالی باشه، از متادیتای پست استفاده کن
        if (empty(trim($faq_content))) {
            $faq_content = get_post_meta(get_the_ID(), 'faq_content', true);
        }
        
        // اگر هیچ محتوایی وجود نداشته باشد
        if (empty(trim($faq_content))) {
            if (\Elementor\Plugin::$instance->editor->is_edit_mode()) {
                echo '<p>' . __('No FAQ content found. Please add content in the widget or in the post metabox.', 'dynamic-faq-accordion-for-elementor') . '</p>';
            } else {
                echo ''; // در حالت غیرویرایش، متن خالی
            }
            return;
        }

        // Parse FAQ content
        $pattern = '/<h2>(.*?)<\/h2>(.*?)(?=(<h2>|<\/div>|$))/is';
        preg_match_all($pattern, $faq_content, $matches, PREG_SET_ORDER);

        if (empty($matches)) {
            if (\Elementor\Plugin::$instance->editor->is_edit_mode()) {
                echo '<p>' . __('No valid FAQ content found. Please use h2 tags for questions.', 'dynamic-faq-accordion-for-elementor') . '</p>';
            } else {
                echo ''; // در حالت غیرویرایش، متن خالی
            }
            return;
        }

        ?>
        <div class="faq-accordion">
            <?php foreach ($matches as $index => $match) : ?>
                <div class="faq-accordion-item">
                    <input type="checkbox" id="faq-<?php echo esc_attr($index); ?>" class="faq-toggle">
                    <label for="faq-<?php echo esc_attr($index); ?>" class="faq-question">
                        <?php echo '<' . $question_title_tag . ' class="question-title">'.wp_kses_post($match[1]) . "</$question_title_tag>"; ?>
                    </label>
                    <div class="faq-accordion-content">
                        <?php echo wp_kses_post($match[2]); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }
}
?>