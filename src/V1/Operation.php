<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommendation.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains an operation for a resource loosely based on the JSON-PATCH format
 * with support for:
 * * Custom filters for describing partial array patch.
 * * Extended path values for describing nested arrays.
 * * Custom fields for describing the resource for which the operation is being
 *   described.
 * * Allows extension to custom operations not natively supported by RFC6902.
 * See https://tools.ietf.org/html/rfc6902 for details on the original RFC.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of this operation. Contains one of 'add', 'remove', 'replace', 'move',
     * 'copy', 'test' and custom operations. This field is case-insensitive and
     * always populated.
     *
     * Generated from protobuf field <code>string action = 1;</code>
     */
    protected $action = '';
    /**
     * Type of GCP resource being modified/tested. This field is always populated.
     * Example: cloudresourcemanager.googleapis.com/Project,
     * compute.googleapis.com/Instance
     *
     * Generated from protobuf field <code>string resource_type = 2;</code>
     */
    protected $resource_type = '';
    /**
     * Contains the fully qualified resource name. This field is always populated.
     * ex: //cloudresourcemanager.googleapis.com/projects/foo.
     *
     * Generated from protobuf field <code>string resource = 3;</code>
     */
    protected $resource = '';
    /**
     * Path to the target field being operated on. If the operation is at the
     * resource level, then path should be "/". This field is always populated.
     *
     * Generated from protobuf field <code>string path = 4;</code>
     */
    protected $path = '';
    /**
     * Can be set with action 'copy' to copy resource configuration across
     * different resources of the same type. Example: A resource clone can be
     * done via action = 'copy', path = "/", from = "/",
     * source_resource = <source> and resource_name = <target>.
     * This field is empty for all other values of `action`.
     *
     * Generated from protobuf field <code>string source_resource = 5;</code>
     */
    protected $source_resource = '';
    /**
     * Can be set with action 'copy' or 'move' to indicate the source field within
     * resource or source_resource, ignored if provided for other operation types.
     *
     * Generated from protobuf field <code>string source_path = 6;</code>
     */
    protected $source_path = '';
    /**
     * Set of filters to apply if `path` refers to array elements or nested array
     * elements in order to narrow down to a single unique element that is being
     * tested/modified.
     * This is intended to be an exact match per filter. To perform advanced
     * matching, use path_value_matchers.
     * * Example:
     * ```
     * {
     *   "/versions/&#42;&#47;name" : "it-123"
     *   "/versions/&#42;&#47;targetSize/percent": 20
     * }
     * ```
     * * Example:
     * ```
     * {
     *   "/bindings/&#42;&#47;role": "roles/owner"
     *   "/bindings/&#42;&#47;condition" : null
     * }
     * ```
     * * Example:
     * ```
     * {
     *   "/bindings/&#42;&#47;role": "roles/owner"
     *   "/bindings/&#42;&#47;members/&#42;" : ["x&#64;example.com", "y&#64;example.com"]
     * }
     * ```
     * When both path_filters and path_value_matchers are set, an implicit AND
     * must be performed.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> path_filters = 8;</code>
     */
    private $path_filters;
    /**
     * Similar to path_filters, this contains set of filters to apply if `path`
     * field refers to array elements. This is meant to support value matching
     * beyond exact match. To perform exact match, use path_filters.
     * When both path_filters and path_value_matchers are set, an implicit AND
     * must be performed.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.recommender.v1.ValueMatcher> path_value_matchers = 11;</code>
     */
    private $path_value_matchers;
    protected $path_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $action
     *           Type of this operation. Contains one of 'add', 'remove', 'replace', 'move',
     *           'copy', 'test' and custom operations. This field is case-insensitive and
     *           always populated.
     *     @type string $resource_type
     *           Type of GCP resource being modified/tested. This field is always populated.
     *           Example: cloudresourcemanager.googleapis.com/Project,
     *           compute.googleapis.com/Instance
     *     @type string $resource
     *           Contains the fully qualified resource name. This field is always populated.
     *           ex: //cloudresourcemanager.googleapis.com/projects/foo.
     *     @type string $path
     *           Path to the target field being operated on. If the operation is at the
     *           resource level, then path should be "/". This field is always populated.
     *     @type string $source_resource
     *           Can be set with action 'copy' to copy resource configuration across
     *           different resources of the same type. Example: A resource clone can be
     *           done via action = 'copy', path = "/", from = "/",
     *           source_resource = <source> and resource_name = <target>.
     *           This field is empty for all other values of `action`.
     *     @type string $source_path
     *           Can be set with action 'copy' or 'move' to indicate the source field within
     *           resource or source_resource, ignored if provided for other operation types.
     *     @type \Google\Protobuf\Value $value
     *           Value for the `path` field. Will be set for actions:'add'/'replace'.
     *           Maybe set for action: 'test'. Either this or `value_matcher` will be set
     *           for 'test' operation. An exact match must be performed.
     *     @type \Google\Cloud\Recommender\V1\ValueMatcher $value_matcher
     *           Can be set for action 'test' for advanced matching for the value of
     *           'path' field. Either this or `value` will be set for 'test' operation.
     *     @type array|\Google\Protobuf\Internal\MapField $path_filters
     *           Set of filters to apply if `path` refers to array elements or nested array
     *           elements in order to narrow down to a single unique element that is being
     *           tested/modified.
     *           This is intended to be an exact match per filter. To perform advanced
     *           matching, use path_value_matchers.
     *           * Example:
     *           ```
     *           {
     *             "/versions/&#42;&#47;name" : "it-123"
     *             "/versions/&#42;&#47;targetSize/percent": 20
     *           }
     *           ```
     *           * Example:
     *           ```
     *           {
     *             "/bindings/&#42;&#47;role": "roles/owner"
     *             "/bindings/&#42;&#47;condition" : null
     *           }
     *           ```
     *           * Example:
     *           ```
     *           {
     *             "/bindings/&#42;&#47;role": "roles/owner"
     *             "/bindings/&#42;&#47;members/&#42;" : ["x&#64;example.com", "y&#64;example.com"]
     *           }
     *           ```
     *           When both path_filters and path_value_matchers are set, an implicit AND
     *           must be performed.
     *     @type array|\Google\Protobuf\Internal\MapField $path_value_matchers
     *           Similar to path_filters, this contains set of filters to apply if `path`
     *           field refers to array elements. This is meant to support value matching
     *           beyond exact match. To perform exact match, use path_filters.
     *           When both path_filters and path_value_matchers are set, an implicit AND
     *           must be performed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of this operation. Contains one of 'add', 'remove', 'replace', 'move',
     * 'copy', 'test' and custom operations. This field is case-insensitive and
     * always populated.
     *
     * Generated from protobuf field <code>string action = 1;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Type of this operation. Contains one of 'add', 'remove', 'replace', 'move',
     * 'copy', 'test' and custom operations. This field is case-insensitive and
     * always populated.
     *
     * Generated from protobuf field <code>string action = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * Type of GCP resource being modified/tested. This field is always populated.
     * Example: cloudresourcemanager.googleapis.com/Project,
     * compute.googleapis.com/Instance
     *
     * Generated from protobuf field <code>string resource_type = 2;</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Type of GCP resource being modified/tested. This field is always populated.
     * Example: cloudresourcemanager.googleapis.com/Project,
     * compute.googleapis.com/Instance
     *
     * Generated from protobuf field <code>string resource_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * Contains the fully qualified resource name. This field is always populated.
     * ex: //cloudresourcemanager.googleapis.com/projects/foo.
     *
     * Generated from protobuf field <code>string resource = 3;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Contains the fully qualified resource name. This field is always populated.
     * ex: //cloudresourcemanager.googleapis.com/projects/foo.
     *
     * Generated from protobuf field <code>string resource = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * Path to the target field being operated on. If the operation is at the
     * resource level, then path should be "/". This field is always populated.
     *
     * Generated from protobuf field <code>string path = 4;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Path to the target field being operated on. If the operation is at the
     * resource level, then path should be "/". This field is always populated.
     *
     * Generated from protobuf field <code>string path = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Can be set with action 'copy' to copy resource configuration across
     * different resources of the same type. Example: A resource clone can be
     * done via action = 'copy', path = "/", from = "/",
     * source_resource = <source> and resource_name = <target>.
     * This field is empty for all other values of `action`.
     *
     * Generated from protobuf field <code>string source_resource = 5;</code>
     * @return string
     */
    public function getSourceResource()
    {
        return $this->source_resource;
    }

    /**
     * Can be set with action 'copy' to copy resource configuration across
     * different resources of the same type. Example: A resource clone can be
     * done via action = 'copy', path = "/", from = "/",
     * source_resource = <source> and resource_name = <target>.
     * This field is empty for all other values of `action`.
     *
     * Generated from protobuf field <code>string source_resource = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_resource = $var;

        return $this;
    }

    /**
     * Can be set with action 'copy' or 'move' to indicate the source field within
     * resource or source_resource, ignored if provided for other operation types.
     *
     * Generated from protobuf field <code>string source_path = 6;</code>
     * @return string
     */
    public function getSourcePath()
    {
        return $this->source_path;
    }

    /**
     * Can be set with action 'copy' or 'move' to indicate the source field within
     * resource or source_resource, ignored if provided for other operation types.
     *
     * Generated from protobuf field <code>string source_path = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSourcePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_path = $var;

        return $this;
    }

    /**
     * Value for the `path` field. Will be set for actions:'add'/'replace'.
     * Maybe set for action: 'test'. Either this or `value_matcher` will be set
     * for 'test' operation. An exact match must be performed.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 7;</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getValue()
    {
        return $this->readOneof(7);
    }

    public function hasValue()
    {
        return $this->hasOneof(7);
    }

    /**
     * Value for the `path` field. Will be set for actions:'add'/'replace'.
     * Maybe set for action: 'test'. Either this or `value_matcher` will be set
     * for 'test' operation. An exact match must be performed.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 7;</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Can be set for action 'test' for advanced matching for the value of
     * 'path' field. Either this or `value` will be set for 'test' operation.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.ValueMatcher value_matcher = 10;</code>
     * @return \Google\Cloud\Recommender\V1\ValueMatcher|null
     */
    public function getValueMatcher()
    {
        return $this->readOneof(10);
    }

    public function hasValueMatcher()
    {
        return $this->hasOneof(10);
    }

    /**
     * Can be set for action 'test' for advanced matching for the value of
     * 'path' field. Either this or `value` will be set for 'test' operation.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.ValueMatcher value_matcher = 10;</code>
     * @param \Google\Cloud\Recommender\V1\ValueMatcher $var
     * @return $this
     */
    public function setValueMatcher($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Recommender\V1\ValueMatcher::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Set of filters to apply if `path` refers to array elements or nested array
     * elements in order to narrow down to a single unique element that is being
     * tested/modified.
     * This is intended to be an exact match per filter. To perform advanced
     * matching, use path_value_matchers.
     * * Example:
     * ```
     * {
     *   "/versions/&#42;&#47;name" : "it-123"
     *   "/versions/&#42;&#47;targetSize/percent": 20
     * }
     * ```
     * * Example:
     * ```
     * {
     *   "/bindings/&#42;&#47;role": "roles/owner"
     *   "/bindings/&#42;&#47;condition" : null
     * }
     * ```
     * * Example:
     * ```
     * {
     *   "/bindings/&#42;&#47;role": "roles/owner"
     *   "/bindings/&#42;&#47;members/&#42;" : ["x&#64;example.com", "y&#64;example.com"]
     * }
     * ```
     * When both path_filters and path_value_matchers are set, an implicit AND
     * must be performed.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> path_filters = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPathFilters()
    {
        return $this->path_filters;
    }

    /**
     * Set of filters to apply if `path` refers to array elements or nested array
     * elements in order to narrow down to a single unique element that is being
     * tested/modified.
     * This is intended to be an exact match per filter. To perform advanced
     * matching, use path_value_matchers.
     * * Example:
     * ```
     * {
     *   "/versions/&#42;&#47;name" : "it-123"
     *   "/versions/&#42;&#47;targetSize/percent": 20
     * }
     * ```
     * * Example:
     * ```
     * {
     *   "/bindings/&#42;&#47;role": "roles/owner"
     *   "/bindings/&#42;&#47;condition" : null
     * }
     * ```
     * * Example:
     * ```
     * {
     *   "/bindings/&#42;&#47;role": "roles/owner"
     *   "/bindings/&#42;&#47;members/&#42;" : ["x&#64;example.com", "y&#64;example.com"]
     * }
     * ```
     * When both path_filters and path_value_matchers are set, an implicit AND
     * must be performed.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> path_filters = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPathFilters($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->path_filters = $arr;

        return $this;
    }

    /**
     * Similar to path_filters, this contains set of filters to apply if `path`
     * field refers to array elements. This is meant to support value matching
     * beyond exact match. To perform exact match, use path_filters.
     * When both path_filters and path_value_matchers are set, an implicit AND
     * must be performed.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.recommender.v1.ValueMatcher> path_value_matchers = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPathValueMatchers()
    {
        return $this->path_value_matchers;
    }

    /**
     * Similar to path_filters, this contains set of filters to apply if `path`
     * field refers to array elements. This is meant to support value matching
     * beyond exact match. To perform exact match, use path_filters.
     * When both path_filters and path_value_matchers are set, an implicit AND
     * must be performed.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.recommender.v1.ValueMatcher> path_value_matchers = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPathValueMatchers($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Recommender\V1\ValueMatcher::class);
        $this->path_value_matchers = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getPathValue()
    {
        return $this->whichOneof("path_value");
    }

}

