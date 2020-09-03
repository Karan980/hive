<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class ScheduledQueryPollResponse
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'scheduleKey',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\metastore\ScheduledQueryKey',
        ),
        2 => array(
            'var' => 'executionId',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        3 => array(
            'var' => 'query',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'user',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var \metastore\ScheduledQueryKey
     */
    public $scheduleKey = null;
    /**
     * @var int
     */
    public $executionId = null;
    /**
     * @var string
     */
    public $query = null;
    /**
     * @var string
     */
    public $user = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['scheduleKey'])) {
                $this->scheduleKey = $vals['scheduleKey'];
            }
            if (isset($vals['executionId'])) {
                $this->executionId = $vals['executionId'];
            }
            if (isset($vals['query'])) {
                $this->query = $vals['query'];
            }
            if (isset($vals['user'])) {
                $this->user = $vals['user'];
            }
        }
    }

    public function getName()
    {
        return 'ScheduledQueryPollResponse';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->scheduleKey = new \metastore\ScheduledQueryKey();
                        $xfer += $this->scheduleKey->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->executionId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->query);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->user);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('ScheduledQueryPollResponse');
        if ($this->scheduleKey !== null) {
            if (!is_object($this->scheduleKey)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('scheduleKey', TType::STRUCT, 1);
            $xfer += $this->scheduleKey->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->executionId !== null) {
            $xfer += $output->writeFieldBegin('executionId', TType::I64, 2);
            $xfer += $output->writeI64($this->executionId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->query !== null) {
            $xfer += $output->writeFieldBegin('query', TType::STRING, 3);
            $xfer += $output->writeString($this->query);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->user !== null) {
            $xfer += $output->writeFieldBegin('user', TType::STRING, 4);
            $xfer += $output->writeString($this->user);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}