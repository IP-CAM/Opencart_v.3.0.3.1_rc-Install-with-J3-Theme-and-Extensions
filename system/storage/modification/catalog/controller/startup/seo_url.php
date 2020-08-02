<?php
class ControllerStartupSeoUrl extends Controller {
	public function index() {
		// Add rewrite to url class
		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);

      // OCFilter start
      if ($this->registry->has('ocfilter')) {
  			$this->url->addRewrite($this->ocfilter);
  		}
      // OCFilter end
      
		}

      if ($this->config->get('mlseo_enabled')) {
        // fix &amp; issue
        if (version_compare(VERSION, '2', '<')) {
          $_SERVER['REQUEST_URI'] = str_replace('&amp;', '&', $_SERVER['REQUEST_URI']);
        }
        
        // HTTP redirect
        if ($this->config->get('mlseo_redirect_http')) {
          $isSSL = !empty($_SERVER['HTTPS']);
          $isWWW = strtolower(substr($_SERVER['HTTP_HOST'], 0, 4)) == 'www.';
          
          if ($this->config->get('mlseo_redirect_http') == 1 && ($isSSL || $isWWW)) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . urldecode('http://'.str_replace('www.', '', $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']));
            exit;
          } else if ($this->config->get('mlseo_redirect_http') == 2 && ($isSSL || !$isWWW)) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . urldecode('http://www.'.str_replace('www.', '', $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']));
            exit;
          } else if ($this->config->get('mlseo_redirect_http') == 3 && (!$isSSL || $isWWW)) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . urldecode('https://'.str_replace('www.', '', $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']));
            exit;
          } else if ($this->config->get('mlseo_redirect_http') == 4 && (!$isSSL || !$isWWW)) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . urldecode('https://www.'.str_replace('www.', '', $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']));
            exit;
          } else if ($this->config->get('mlseo_redirect_http') == 5 && (!$isSSL)) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . urldecode('https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
            exit;
          } else if ($this->config->get('mlseo_redirect_http') == 6 && ($isSSL)) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . urldecode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
            exit;
          } else if ($this->config->get('mlseo_redirect_http') == 7 && (!$isWWW)) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . urldecode('http'.($isSSL?'s':'').'://www.'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
            exit;
          } else if ($this->config->get('mlseo_redirect_http') == 8 && ($isWWW)) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . urldecode('http'.($isSSL?'s':'').'://'.str_replace('www.', '', $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']));
            exit;
          }
        }
        
        // redirection manager
        $url = urldecode('http' . (!empty($_SERVER['HTTPS']) ? 's' : '') . '://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $uri = urldecode($_SERVER['REQUEST_URI']);
        
        if ($this->config->get('mlseo_redirect_dynamic') && isset($this->request->get['route']) && $this->request->get['route'] !== 'account/login' && !(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
          $redir_request = $_GET;
          $redir_route = $this->request->get['route'];
          unset($redir_request['route']);
          
          if (!empty($_SERVER['HTTPS'])) {
            $redir_url = $this->url->link($redir_route, http_build_query($redir_request, '', '&'), $_SERVER['HTTPS']);
          } else {
            $redir_url = $this->url->link($redir_route, http_build_query($redir_request, '', '&'));
          }
          
          
          if (rtrim($redir_url, '/') != rtrim($url, '/') && !strpos($redir_url, 'route=')) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redir_url); 
            exit;
          }
        }
        
        if ($this->config->get('mlseo_redirect')) {
         $redirect = $this->db->query("SELECT redirect, language_id FROM " . DB_PREFIX . "url_redirect WHERE query = '" . $this->db->escape($url) . "' OR query = '" . $this->db->escape($uri) . "' LIMIT 1")->row;
         
         if(!empty($redirect['redirect'])) {
           $lang = $redirect['language_id'];
           $redirect = $redirect['redirect'];
           
           if ((substr($redirect, 0, 1) != '/') && (substr($redirect, 0, 4) != 'http')) {
             if ($lang) {
               $this->load->model('localisation/language');
               $languagesArray = $this->model_localisation_language->getLanguages();
               
               if(count($languagesArray) > 1) {
                 $languages = array();
                 foreach ($languagesArray as $result) { $languages[$result['language_id']] = $result; }
                 $this->config->set('config_language_id', $languages[$lang]['language_id']);
                 $this->config->set('config_language', $languages[$lang]['code']);
                 $this->session->data['language'] = $languages[$lang]['code'];
               }
             }
           
             if ($params = strstr($redirect, '&')) {
               $route = str_replace(array($params, 'index.php?route='), '', $redirect);
             } else {
               $params = '';
             }
             
             $redirect = str_replace('&amp;', '&', $this->url->link($route, substr(str_replace('&amp;', '&', $params), 1)));
           }
           
           if ($redirect != $url) {
             header('HTTP/1.1 301 Moved Permanently');
             header('Location: ' . $redirect); 
             exit;
           }
         }
       }
      }
      

		// Decode URL
		  /*if ($this->config->get('mlseo_flag') && !isset($this->request->get["_route_"]) && !isset($this->request->get["route"])) {
        if ($this->config->get('mlseo_default_lang') == substr($this->session->data['language'], 0, 2) || $this->config->get('mlseo_default_lang') == $this->session->data['language']) {
          if (version_compare(VERSION, '2', '>=')) return new Action('common/home');
          else return $this->forward('common/home');
        } else {
          if (version_compare(VERSION, '2', '>=')) $this->response->redirect($this->url->link('common/home'));
          else $this->redirect($this->url->link('common/home'));
        }
      }
      */
      
      if ($this->config->get('advanced_sitemap_rewrite')) {
        $uri = str_replace(array($this->config->get('config_url'), $this->config->get('config_ssl')), '', urldecode('http' . (!empty($_SERVER['HTTPS']) ? 's' : '') . '://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
        $sitemapFolder = '';
        if (preg_match('/^'.$sitemapFolder.'sitemap-(\w+)(?:-(\w{2}))?(?:-(\d+))?.xml$/', $uri, $advStmpVars)) {
          if (strlen($advStmpVars[1]) == 2) {
            $this->request->get['route'] = 'feed/advanced_sitemap';
            $this->request->get['lang'] = $advStmpVars[1];
            
            return new Action($this->request->get['route']);
          }
          
          $this->request->get['route'] = 'feed/advanced_sitemap/'.$advStmpVars[1];
          $this->request->get['lang'] = isset($advStmpVars[2]) ? $advStmpVars[2] : '';
          $this->request->get['page'] = isset($advStmpVars[3]) ? $advStmpVars[3] : 1;
          
          return new Action($this->request->get['route']);
        } else if ($uri == $sitemapFolder.'sitemap.xml') {
          $this->request->get['route'] = 'feed/advanced_sitemap';
          return new Action($this->request->get['route']);
        } else if (preg_match('/^'.$sitemapFolder.'product-grid(?:-(\d+))?.xml$/', $uri, $advStmpVars)) {
          $this->request->get['route'] = 'feed/advanced_sitemap/product';
          $this->request->get['page'] = isset($advStmpVars[1]) ? $advStmpVars[1] : 1;
          $this->request->get['grid'] = 1;
          
          return new Action($this->request->get['route']);
        }
      }
      
      //if (isset($this->request->get['_route_'])) {
      
      if (!empty($this->request->get['_route_'])) {
        if ($this->config->get('mlseo_extension')) {
          $this->request->get['_route_'] = str_replace($this->config->get('mlseo_extension'), '', $this->request->get['_route_']);
        }
			$parts = explode('/', $this->request->get['_route_']);

			// remove any empty arrays from trailing
			if (utf8_strlen(end($parts)) == 0) {
				array_pop($parts);
			}

			
      // Friendly urls
      if ($this->config->get('mlseo_friendly')) {
        $ml_mode = '';
        
        if ($this->config->get('mlseo_multistore')) {
          $ml_mode .= " AND (`store_id` = '" . (int)$this->config->get('config_store_id') . "' OR `store_id` = 0)";
        }
        
        if ($this->config->get('mlseo_ml_mode')) {
          $ml_mode .= " AND (`language_id` = '" . (int)$this->config->get('config_language_id') . "' OR `language_id` = 0) ORDER BY language_id DESC";
        }
        
        $seoUrlTable = version_compare(VERSION, '3', '>=') ? 'seo_url' : 'url_alias';

        $friendly_qry = $this->db->query("SELECT * FROM " . DB_PREFIX . $seoUrlTable . " WHERE keyword = '" . $this->db->escape(rtrim($this->request->get['_route_'], '/')) . "' " . $ml_mode);
        
        if (isset($friendly_qry->row['query']) && substr($friendly_qry->row['query'], 0, 6) == 'route=') {
          $this->request->get['route'] = str_replace('route=', '', $friendly_qry->row['query']);
          return new Action($this->request->get['route']);
        }
      }
      
      // Absolute url
      if ($this->config->get('mlseo_url_absolute')) {
        $fullUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $fullUrl = str_replace(array($this->config->get('config_url'), $this->config->get('config_url')), '', $fullUrl);
        
        $urlAbsolute = $this->db->query("SELECT query, language_id FROM " . DB_PREFIX . "url_absolute WHERE redirect = '" . $this->db->escape($fullUrl) . "' LIMIT 1")->row;
           
        if (!empty($urlAbsolute['query'])) {
           parse_str('route='.$urlAbsolute['query'], $this->request->get);
           $parts = array();
        }
      }
      
      if (!empty($parts[0]) && !empty($parts[1]) && $parts[0] === $this->config->get('mlseo_fpp_tag_'.$this->config->get('config_language_id'))) {
        $this->request->get['route'] = 'product/search';
        $this->request->get['tag'] = str_replace('-', ' ', $parts[1]);
        
        $parts = array();
      }
      
      $seoIsCategory = false;
      
			foreach ($parts as $part) {
      
        if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_pagination') && (!empty($this->request->get['path']) || !empty($this->request->get['search']) || !empty($this->request->get['manufacturer_id'])) && preg_match('/page-(\d+)/', $part, $page)) {
          $this->request->get['page'] = $page[1];
          continue;
        }
      
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($part) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

				if ($query->num_rows) {
					$url = explode('=', $query->row['query']);


          if ($url[0] == 'route') {
            $this->request->get['route'] = $url[1];
          }
          
          if (isset($url[1]) && !in_array($url[0], array('route', 'product_id', 'category_id', 'information_id', 'manufacturer_id', 'blog_article_id'))) {
            $this->request->get[$url[0]] = $url[1];
          }
      
					if ($url[0] == 'product_id') {
						$this->request->get['product_id'] = $url[1];
					}

					if ($url[0] == 'category_id') {

            $seoIsCategory = true;
            
            if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_absolute') && $query->num_rows > 1) {
              $parent_id = 0;
              
              if (!empty($this->request->get['path'])) {
            $parent_id = str_replace('_', '', strrchr($this->request->get['path'], '_'));
                
                if(!$parent_id) {
                  $parent_id = $this->request->get['path'];
                }
              }
              
              if (version_compare(VERSION, '3', '>=')) {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url u left join " . DB_PREFIX . "category c on c.category_id = REPLACE(u.query, 'category_id=', '') WHERE u.keyword = '" . $this->db->escape($part) . "' AND c.parent_id = '" . $this->db->escape($parent_id) . "'");
              } else {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "url_alias u left join " . DB_PREFIX . "category c on c.category_id = REPLACE(u.query, 'category_id=', '') WHERE u.keyword = '" . $this->db->escape($part) . "' AND c.parent_id = '" . $this->db->escape($parent_id) . "'");
              }
              
              if(isset($query->row['query'])) {
                $url = explode('=', $query->row['query']);
              }
            }
      
						if (!isset($this->request->get['path'])) {
							$this->request->get['path'] = $url[1];
						} else {
							$this->request->get['path'] .= '_' . $url[1];
						}
					}

					if ($url[0] == 'manufacturer_id') {
						$this->request->get['manufacturer_id'] = $url[1];

              if ($this->config->get('mlseo_fpp_brand_parent') && isset($this->request->get['route']) && $this->request->get['route'] == 'product/manufacturer') {
                unset($this->request->get['route']);
              }
			
					}

					if ($url[0] == 'information_id') {
						$this->request->get['information_id'] = $url[1];
					}

					if (empty($this->request->get['route']) && $url[0] != 'route' && !empty($query->row['query']) && $url[0] != 'information_id' && $url[0] != 'manufacturer_id' && $url[0] != 'category_id' && $url[0] != 'product_id') {
						$this->request->get['route'] = $query->row['query'];
					}
				} else {
					$this->request->get['route'] = 'error/not_found';

					break;
				}
			}

			if (!isset($this->request->get['route'])) {
				if (isset($this->request->get['product_id'])) {
					$this->request->get['route'] = 'product/product';
				} elseif (isset($this->request->get['path'])) {
					$this->request->get['route'] = 'product/category';
				} elseif (isset($this->request->get['manufacturer_id'])) {
					$this->request->get['route'] = 'product/manufacturer/info';
				} elseif (isset($this->request->get['information_id'])) {
					$this->request->get['route'] = 'information/information';
				}
			}

        if (isset($this->request->get['route']) && $this->config->get('mlseo_redirect_canonical') && $this->request->get['route'] !== 'account/login' && !isset($this->request->get['mfp'])) {
          $url = urldecode('http' . (!empty($_SERVER['HTTPS']) ? 's' : '') . '://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          $uri = urldecode($_SERVER['REQUEST_URI']);
          
          $redir_request = $this->request->get;
          $redir_route = $this->request->get['route'];
          unset($redir_request['route'], $redir_request['_route_']);
          
          if (!empty($_SERVER['HTTPS'])) {
            if ($this->request->get['route'] == 'product/category' && $this->config->get('mlseo_redirect_canonical') == '2') {
              $this->load->model('tool/path_manager');
              
              $cat_id = strstr($redir_request['path'], '_') ? substr(strrchr($redir_request['path'], '_'), 1) : $redir_request['path'];
              
              unset($redir_request['path']);
              $extra_params = '';
              if($redir_request) {
                $extra_params = '&'.http_build_query($redir_request, '', '&');
              }
              
              $redir_url = str_replace('&amp;', '&', $this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($cat_id) : $cat_id).$extra_params, $_SERVER['HTTPS']));
            } else {
              $redir_url = str_replace('&amp;', '&', $this->url->link($redir_route, http_build_query($redir_request, '', '&'), $_SERVER['HTTPS']));
            }
          } else {
            if ($this->request->get['route'] == 'product/category' && $this->config->get('mlseo_redirect_canonical') == '2') {
              $this->load->model('tool/path_manager');
              
              $cat_id = strstr($redir_request['path'], '_') ? substr(strrchr($redir_request['path'], '_'), 1) : $redir_request['path'];
              
              unset($redir_request['path']);
              $extra_params = '';
              if($redir_request) {
                $extra_params = '&'.http_build_query($redir_request, '', '&');
              }
              
              $redir_url = str_replace('&amp;', '&', $this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($cat_id).$extra_params : $cat_id)));
            } else {
              $redir_url = str_replace('&amp;', '&', $this->url->link($redir_route, http_build_query($redir_request, '', '&')));
            }
          }
          
          if (!strpos($redir_url, 'route=') && (($redir_url != str_replace('&amp;', '&', $url)) && (urldecode($redir_url) != str_replace('&amp;', '&', $url))) && !isset($redir_request['blogpath'])) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redir_url); 
            exit;
          }
        }
      
		}
	}

	public function rewrite($link) {

        if (isset($this->session->data['language']) && !($this->session->data['language'] == $this->config->get('config_language') || $this->session->data['language'] == substr($this->config->get('config_language'), 0, 2))) {
          $this->load->model('localisation/language');
          $languagesById = $this->model_localisation_language->getLanguages();
          $languages = array();
          foreach ($languagesById as $result) {
            $languages[$result['code']] = $result;
            if (strpos($result['code'], '-')) {
              $languages[substr($result['code'], 0, 2)] = $result;
            }
          }
          $this->config->set('config_language_id', $languages[ $this->session->data['language'] ]['language_id']);
        }
        
        $lang = isset($this->session->data['language']) ? $this->session->data['language'] : $this->config->get('config_language');
        
        $ml_mode = '';
        
        if ($this->config->get('mlseo_multistore')) {
          $ml_mode .= " AND (`store_id` = '" . (int)$this->config->get('config_store_id') . "' OR `store_id` = 0)";
        }
        
        if ($this->config->get('mlseo_ml_mode')) {
          $ml_mode .= " AND (`language_id` = '" . (int)$this->config->get('config_language_id') . "' OR `language_id` = 0) ORDER BY language_id DESC";
        }
      
		$url_info = parse_url(str_replace('&amp;', '&', $link));

		$url = '';

		$data = array();

		parse_str($url_info['query'], $data);
      
        // Absolute url
        if ($this->config->get('mlseo_url_absolute')) {
          if ($route = strstr($link, '/index.php?route=')) {
             $route = str_replace(array('/index.php?route=', '&amp;'), array('', '&'), $route);
             $urlAbsolute = $this->db->query("SELECT redirect, language_id FROM " . DB_PREFIX . "url_absolute WHERE query = '" . $this->db->escape($route) . "' AND language_id = '" . (int) $this->config->get('config_language_id') . "'")->row;
             
             if (!empty($urlAbsolute['redirect'])) {
               $url = '/' . $urlAbsolute['redirect'];
               //$data = array();
               return ${'url_info'}['scheme'] . '://' . ${'url_info'}['host'] . (isset(${'url_info'}['port']) ? ':' . ${'url_info'}['port'] : '') . str_replace('/index.php', '', ${'url_info'}['path']) . $url;
             }
          }
        }
        
        if (isset($data['route']) && $data['route'] == 'product/search' && !empty($data['tag']) && $this->config->get('mlseo_fpp_tag_'.$this->config->get('config_language_id'))) {
          if ($this->config->get('mlseo_ascii_'.$this->config->get('config_language_id'))) {
            include_once(DIR_SYSTEM . 'library/gkd_urlify.php');
            $data['tag'] = URLify::downcode($data['tag'], substr($this->config->get('config_language'), 0, 2));
          }
          
          $url = '/'.$this->config->get('mlseo_fpp_tag_'.$this->config->get('config_language_id')).'/'.str_replace(' ', '-', $data['tag']);
          unset($data['route']);
          unset($data['tag']);
        }
        
        if ($this->config->get('advanced_sitemap_rewrite') && isset($data['route']) && strpos($data['route'], 'feed/advanced_sitemap') !== false) {
          $advStmpType = substr(strrchr($data['route'], '/'), 1);
          $sitemapFolder = '';
          if (!in_array($advStmpType, array('xslindex', 'xsl', 'xsl_grid'))) {
            if ($advStmpType == 'advanced_sitemap') {
              $url .= $sitemapFolder.'/sitemap';
            } else {
              $url .= $sitemapFolder.'/sitemap-'.$advStmpType;
            }
            
            if (isset($data['lang'])) {
              $url .= '-'.$data['lang'];
              unset($data['lang']);
            }
            
            if (isset($data['page'])) {
              $url .= '-'.$data['page'];
              unset($data['page']);
            }
            
            $url .= '.xml';
          }
          
          $seoPkgNoFlag = 1;
        }
      
				if (isset($data['route']) && $data['route'] == 'product/product') {
          if($this->config->get('mlseo_fpp_bypasscat') && isset($data['path'])) {
            unset($data['path']);
          }
          
          if(isset($data['manufacturer_id']) && $this->config->get('mlseo_fpp_mode') != '3') {
            unset($data['manufacturer_id']);
          }
          
          if(!isset($data['path']) && !isset($data['manufacturer_id']) && isset($data['product_id'])) {
            $this->load->model('tool/path_manager');
            $data = (array) $this->model_tool_path_manager->getFullProductPath($data['product_id']) + $data;
          }
				}
        
        $gkd_is_category = (isset($data['route']) && $data['route'] == 'product/category') ? true : false;

		foreach ($data as $key => $value) {
			if (isset($data['route'])) {

      $url_cache = NULL;
      if ($this->config->get('mlseo_cache') && $this->config->get('mlseo_enabled') && $key != 'page' && is_string($value) && (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id')))
        $url_cache = Powercache::get('seo_rewrite.' . $this->config->get('config_language_id'), $this->db->escape($key . '=' . $value));
      if ($url_cache === NULL) {
        $old_url = $url;
      
				if (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id')) {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($query->num_rows && $query->row['keyword']) {

        if ($data['route'] == 'product/manufacturer/info' && $key == 'manufacturer_id' && $this->config->get('mlseo_fpp_brand_parent')) {
          $this->load->model('tool/path_manager');
          $url .= $this->model_tool_path_manager->getManufacturerKeyword();
        }
			
if ($this->config->get('mlseo_enabled') && !(($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id')) $url .= '/' . $query->row['keyword'] . $this->config->get('mlseo_extension'); else
						$url .= '/' . $query->row['keyword'];

						unset($data[$key]);
					}
				} elseif ($key == 'route') {
	$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");
   	if ($query->num_rows && $query->row['keyword']) {
	 	$url .= '/' . $query->row['keyword'];
	 	unset($data[$key]);
   	} else if ($data['route'] == "common/home") { 
	 $url .= '/'; 
   	}
				} 
          elseif ($this->config->get('mlseo_enabled') && $key == 'route' && $value == 'common/home') {
            $url .= '/';
          } elseif ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_pagination') && $key == 'page' && $url && isset($data['route']) && ($data['route'] == 'product/category' || $data['route'] == 'product/search' || $data['route'] == 'product/manufacturer/info' || $data['route'] == 'journal2/blog')) {
            $url .= '/page-'.$value;
            unset($data[$key]);
          } elseif ($key == 'path') {
      

					} elseif ($key == 'route') {

						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");
						if ($query->num_rows && $query->row['keyword']) {
						$url .= '/' . $query->row['keyword'];
						unset($data[$key]);
						} else if ($data['route'] == "common/home") { 
						$url .= '/'; 
					} 

					$categories = explode('_', $value);

          $last_cat = count($categories)-1;
          foreach ($categories as $cat_key => $cat_id) {
            if($cat_key != $last_cat && in_array($cat_id, (array) $this->config->get('mlseo_fpp_categories'))) {
              unset($categories[$cat_key]);
            }
          }
      

        if ($this->config->get('mlseo_fpp_directcat')) {
          $categories = array(array_pop($categories));
				}
			

					foreach ($categories as $category) {
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = 'category_id=" . (int)$category . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

						if ($query->num_rows && $query->row['keyword']) {
							$url .= '/' . $query->row['keyword'];
						} else {
							$url = '';

							break;
						}
					}

					unset($data[$key]);
				}

          elseif ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_friendly') && $value != 'common/home' && is_string($value) && !in_array($key, array('path', 'product_id', 'category_id', 'manufacturer_id', 'information_id'))) {
            if (version_compare(VERSION, '3', '>=')) {
              $query = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . $value) . "'" . $ml_mode);
            } else {
              $query = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "url_alias WHERE `query` = '" . $this->db->escape($key . '=' . $value) . "'" . $ml_mode);
            }
            if ($query->num_rows) {
              $url .= '/' . $query->row['keyword'];
              $url .= $query->row['keyword'] ? $this->config->get('mlseo_extension') : '';
              if($key != 'route') unset($data[$key]);
            }
          }
          
        if ($this->config->get('mlseo_cache') && $this->config->get('mlseo_enabled') && $key != 'page' && is_string($value) && (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id')))
          Powercache::add('seo_rewrite.' . $this->config->get('config_language_id'), $this->db->escape($key . '=' . $value), str_replace($old_url, '', $url));
      } else if ($url_cache) {
        $url .= $url_cache;
        unset($data[$key]);
      } //end cache
      
			}
		}

		if ($url) {
			unset($data['route']);

			$query = '';

			if ($data) {
				foreach ($data as $key => $value) {
					$query .= '&' . rawurlencode((string)$key) . '=' . rawurlencode((is_array($value) ? http_build_query($value) : (string)$value));
				}

				if ($query) {
					$query = '?' . str_replace('&', '&amp;', trim($query, '&'));
				}
			}


        
        if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_flag') && !($this->config->get('mlseo_flag_default') && ($this->config->get('mlseo_default_lang') == $lang)) && !isset($seoPkgNoFlag)) {
          if ($this->config->get('mlseo_flag_short')) {
            $lang = substr($lang, 0, 2);
          }
          
          $url = ($this->config->get('mlseo_flag_upper')) ? '/'.strtoupper($lang).$url : '/'.$lang.$url;
        }
        
        $url = rtrim($url, '/');
        
        if (($this->config->get('mlseo_fpp_slash') == '1' && !empty($gkd_is_category)) || $this->config->get('mlseo_fpp_slash') == '2') {
          if ((!$this->config->get('mlseo_extension') || ($this->config->get('mlseo_extension') && !strpos($url, $this->config->get('mlseo_extension')))) && !(substr($url, -4) == '.xml')) {
            $url .= '/';
          }
        }
      
			return $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']) . $url . $query;
		} else {
			return $link;
		}
	}
}
