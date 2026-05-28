<?php
/**
 * 投稿を部分一致検索で選べるCustomizerコントロール
 *
 * テキスト入力欄に記事タイトルの一部を入力すると、
 * ブラウザ標準のdatalistで候補が絞り込み表示される。
 * 候補を選ぶと、その投稿IDが設定値として保存される。
 *
 * @package LaLa_Global_Language
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Lala_Post_Search_Control' ) ) {

    class Lala_Post_Search_Control extends WP_Customize_Control {

        /**
         * コントロールタイプ
         *
         * @var string
         */
        public $type = 'lala_post_search';

        /**
         * 検索対象の投稿リスト（ID => タイトル）
         *
         * @var array
         */
        public $posts = array();

        /**
         * コントロールの描画
         */
        public function render_content() {
            // 現在保存されているID
            $current_id    = absint( $this->value() );
            $current_title = $current_id ? get_the_title( $current_id ) : '';

            // この入力欄ごとに一意なIDを生成（datalistの紐付け用）
            $input_id    = 'lala-post-search-' . esc_attr( $this->id );
            $datalist_id = 'lala-post-list-' . esc_attr( $this->id );
            ?>
            <label>
                <?php if ( ! empty( $this->label ) ) : ?>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php endif; ?>
                <?php if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
                <?php endif; ?>

                <input
                    type="text"
                    class="lala-post-search-input"
                    id="<?php echo esc_attr( $input_id ); ?>"
                    list="<?php echo esc_attr( $datalist_id ); ?>"
                    value="<?php echo esc_attr( $current_title ); ?>"
                    placeholder="<?php esc_attr_e( '記事タイトルを入力して検索…', 'lala-global-language' ); ?>"
                    autocomplete="off"
                />

                <datalist id="<?php echo esc_attr( $datalist_id ); ?>">
                    <?php foreach ( $this->posts as $post_id => $post_title ) : ?>
                        <option
                            value="<?php echo esc_attr( $post_title ); ?>"
                            data-id="<?php echo esc_attr( $post_id ); ?>"
                        ></option>
                    <?php endforeach; ?>
                </datalist>

                <?php // 実際にDBへ保存される投稿ID（hidden）。data-customize-setting-link でCustomizer設定に紐付け ?>
                <input
                    type="hidden"
                    class="lala-post-search-id"
                    value="<?php echo esc_attr( $current_id ); ?>"
                    <?php $this->link(); ?>
                />

                <span class="lala-post-search-status description" style="display:block;margin-top:4px;color:#646970;font-size:11px;">
                    <?php
                    if ( $current_id ) {
                        printf( esc_html__( '選択中: ID %d', 'lala-global-language' ), $current_id );
                    } else {
                        esc_html_e( '未選択', 'lala-global-language' );
                    }
                    ?>
                </span>
            </label>
            <?php
        }
    }
}
