<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace\TaskQueue;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string accountSid
 * @property array activityStatistics
 * @property integer longestTaskWaitingAge
 * @property string taskQueueSid
 * @property array tasksByPriority
 * @property array tasksByStatus
 * @property integer totalAvailableWorkers
 * @property integer totalEligibleWorkers
 * @property integer totalTasks
 * @property string workspaceSid
 * @property string url
 */
class TaskQueueRealTimeStatisticsInstance extends InstanceResource {
    /**
     * Initialize the TaskQueueRealTimeStatisticsInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $workspaceSid The workspace_sid
     * @param string $taskQueueSid The task_queue_sid
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\TaskQueue\TaskQueueRealTimeStatisticsInstance 
     */
    public function __construct(Version $version, array $payload, $workspaceSid, $taskQueueSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'activityStatistics' => Values::array_get($payload, 'activity_statistics'),
            'longestTaskWaitingAge' => Values::array_get($payload, 'longest_task_waiting_age'),
            'taskQueueSid' => Values::array_get($payload, 'task_queue_sid'),
            'tasksByPriority' => Values::array_get($payload, 'tasks_by_priority'),
            'tasksByStatus' => Values::array_get($payload, 'tasks_by_status'),
            'totalAvailableWorkers' => Values::array_get($payload, 'total_available_workers'),
            'totalEligibleWorkers' => Values::array_get($payload, 'total_eligible_workers'),
            'totalTasks' => Values::array_get($payload, 'total_tasks'),
            'workspaceSid' => Values::array_get($payload, 'workspace_sid'),
            'url' => Values::array_get($payload, 'url'),
        );

        $this->solution = array('workspaceSid' => $workspaceSid, 'taskQueueSid' => $taskQueueSid);
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\TaskQueue\TaskQueueRealTimeStatisticsContext Context for this
     *                                                                                           TaskQueueRealTimeStatisticsInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new TaskQueueRealTimeStatisticsContext(
                $this->version,
                $this->solution['workspaceSid'],
                $this->solution['taskQueueSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a TaskQueueRealTimeStatisticsInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return TaskQueueRealTimeStatisticsInstance Fetched
     *                                             TaskQueueRealTimeStatisticsInstance
     */
    public function fetch($options = array()) {
        return $this->proxy()->fetch($options);
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Taskrouter.V1.TaskQueueRealTimeStatisticsInstance ' . implode(' ', $context) . ']';
    }
}